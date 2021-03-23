{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Management User
            </h3>
        </div>
    </div>
    {{-- Body --}}
    <div class="card-body pt-4 table-responsive">
        <table class="table table-bordered yajra-datatable">
            <thead>
                <tr class='text-center'>
                    <th width='20px'>No</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Status</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(function () {
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {data: 'name', name: 'name'},
            {data: 'username', name: 'username'},
            {data: 'email', name: 'email'},
            {data: 'roles', name: 'roles'},
            {data: 'status', name: 'status'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ],
        "columnDefs": [
            { className: "text-center", "targets": [ 0, 6 ] }
        ]
    }).on( 'draw', function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

  });

//   function activate user
  $('body').on('click', '.btn-activated', function (e) {
            e.preventDefault();
            var url = $(this).data('remote');

            swal.fire({
            title: 'Are you sure?',
            text: "User will be activated",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
            }).then(function(e) {
                if(e.value){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    // confirm then
                    $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            _method: 'GET',
                            submit: true,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function (param) {
                            if(param.code == 'success'){
                                swal.fire('Success', param.msg, param.code)
                            }
                            if(param.code == 'error'){
                                swal.fire('Oops', param.msg, param.code)
                            }
                            cekDataTable = $('.dataTable').html();
                            if(cekDataTable){
                                $('.dataTable').DataTable().draw(false);
                            }else{
                                window.location.reload();
                            }

                        },
                        error: function (param) {
                            swal.fire('Oops', 'Something went wrong!', 'error')
                        }
                    })
                }
            })
        });
</script>
@endsection
