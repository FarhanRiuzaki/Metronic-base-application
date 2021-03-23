@extends('layout.default')

@section('content')
<style>
    .autocomplete-suggestions {
       border: 1px solid rgba(231, 231, 231, 0.664);
       background: #FFF;
       overflow: auto;
       box-shadow: 0px 0px 30px 0px rgb(82 63 105 / 5%);
   }
   .autocomplete-suggestion {
       padding: 2px 5px;
       white-space: nowrap;
       overflow: hidden;
   }
   .autocomplete-selected {
       background: #F0F0F0;
   }
   .autocomplete-suggestions strong {
       font-weight: normal;
       color: #3399FF;
   }
   .autocomplete-group {
       padding: 2px 5px;
   }
   .autocomplete-group strong {
       display: block;
       border-bottom: 1px solid #000;
   }
</style>
<div class="row">
    @php
        $class_offset = 'offset-2';
    @endphp
    @can('permission.create')
        @php
            $class_offset = '';
        @endphp
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="card card-custom {{ @$class }}">
                {{-- Header --}}
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                    </h3>
                    <h3 class="card-label">Add Permission
                    </div>
                </div>
                {{-- Body --}}
                <div class="card-body pt-4" >
                    @if(isset($permission_edit))
                        @include('master.permission.edit')
                    @else
                        @include('master.permission.create')
                    @endif
                </div>
            </div>
        </div>
    @endcan
    <div class="col-xs-8 col-sm-8 col-md-8 {{ @$class_offset }}">
        <div class="card card-custom {{ @$class }}">
            {{-- Header --}}
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">{{ @$page_description }}
                    </h3>
                </div>
            </div>
            {{-- Body --}}
            <div class="card-body pt-4 table-responsive" >
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr class="text-center">
                            <th width='30px'>No</th>
                            <th>Name</th>
                            <th>Guard</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th width='100px'>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script type="text/javascript">
	 $(document).ready(function() {
        var type    = '';
        var url     = "{{ route('permissions.datatable') }}";
        @if(isset($permission_edit))
            var type    = 'edit';
        @else
            var type    = 'create';
        @endif
        // Redraw data table, causes data to be reloaded
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: url,
                type: 'GET',
                data: {
                    type: type
                }
            },
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {data: 'name', name: 'name'},
                {data: 'guard_name', name: 'guard_name'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ],
            "columnDefs": [
                { className: "text-center", "targets": [ 0, 5] }
            ],
            rowGroup: {
                dataSrc: 'group'
            },
            scrollY: "500px",
            scrollCollapse: true,
            paging: false
        }).on( 'draw', function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        var data = <?php echo json_encode($output) ?>;
        // Selector input yang akan menampilkan autocomplete.
        $( "#permission" ).autocomplete({
            lookup: data
        });
    })

    $('#permission').on('keyup', function(){
        $(this).val(function (i, value) {
            return value.replace(/ /g, '.');
        });
    });
</script>
@endsection
