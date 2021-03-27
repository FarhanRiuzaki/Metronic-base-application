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
            <div class="card-body pt-4" >
                <div class="card-body pt-4 table-responsive" >
                    <table class="table table-striped yajra-datatable">
                        <thead>
                            <tr class="text-center">
                                <th width='30px'>No</th>
                                <th width='30%'>Date</th>
                                <th>Event</th>
                                <th>Model</th>
                                <th>Record</th>
                                <th>Done By</th>
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
</div>
@endsection

@push('scripts')
<script>
    $(function () {
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('audits.index') }}",
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {data: 'created_at', name: 'created_at'},
            {data: 'event', name: 'event'},
            {data: 'auditable_type', name: 'auditable_type'},
            {data: 'record', name: 'record'},
            {data: 'user', name: 'user'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ],
        "columnDefs": [
            { className: "text-center", "targets": [ 0, 2, 6 ] }
        ]
    }).on( 'draw', function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

  });
</script>
@endpush
