@extends('layout.default')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
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
                <table class="table table-striped yajra-datatable">
                    <thead>
                        <tr class="text-center">
                            <th>Date</th>
                            <th>Method</th>
                            <th>Status Code</th>
                            <th>Class</th>
                            <th>File</th>
                            <th>User ID</th>
                            <th width='125px'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(function () {
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('bugs.index') }}",
        columns: [
            {data: 'created_at', name: 'created_at'},
            {data: 'method', name: 'method'},
            {data: 'code', name: 'code'},
            {data: 'class', name: 'class'},
            {data: 'file', name: 'file'},
            {data: 'user_id', name: 'user_id'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ],
        "columnDefs": [
            { className: "text-center", "targets": [ 6 ] }
        ],
        "order": [[ 0, "desc" ]]
    }).on( 'draw', function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

  });
</script>
@endpush
