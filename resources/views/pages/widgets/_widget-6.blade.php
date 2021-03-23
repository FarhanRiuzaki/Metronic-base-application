{{-- Advance Table Widget 2 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
            <span class="font-weight-bolder text-dark">New Register</span>
            {{-- <span class="text-muted mt-3 font-weight-bold font-size-sm">{{ count(auth()->user()->authentications)}}</span> --}}
        </h3>
    </div>

    {{-- Body --}}
    <div class="card-body pt-8">
        {{-- Table --}}
        <div class="table-responsive mb-10">
            <table class="table yajra-datatable">
                <thead>
                    <tr class='text-center'>
                        {{-- <th width='20px'>No</th> --}}
                        <th>#</th>
                        <th>Name</th>
                        {{-- <th>Username</th> --}}
                        <th>Email</th>
                        {{-- <th>Roles</th> --}}
                        <th>Status</th>
                        <th>Register Date</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            {{-- <table class="table table-borderless table-vertical-center">
                <thead>
                    <tr>
                        <th class="p-0" style="width: 50px"></th>
                        <th class="p-0" style="min-width: 200px"></th>
                        <th class="p-0" style="min-width: 100px"></th>
                        <th class="p-0" style="min-width: 125px"></th>
                        <th class="p-0" style="min-width: 110px"></th>
                        <th class="p-0" style="min-width: 150px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pl-0 py-4">
                            <div class="symbol symbol-50 symbol-light mr-1">
                                <span class="symbol-label">
                                    <img src="{{ asset('media/svg/misc/006-plurk.svg') }}" class="h-50 align-self-center"/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                            <div>
                                <span class="font-weight-bolder">Email:</span>
                                <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                            </div>
                        </td>
                        <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                $2,000,000
                            </span>
                            <span class="text-muted font-weight-bold">
                                Paid
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                            ReactJs, HTML
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-primary label-inline">Approved</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Settings-1.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm mx-3">
                                {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-4">
                            <div class="symbol symbol-50 symbol-light">
                                <span class="symbol-label">
                                    <img src="{{ asset('media/svg/misc/015-telegram.svg') }}" class="h-50 align-self-center"/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                            <div>
                                <span class="font-weight-bolder">Email:</span>
                                <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
                            </div>
                        </td>
                        <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                $4,600,000
                            </span>
                            <span class="text-muted font-weight-bold">
                                Paid
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                                Python, MySQL
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-warning label-inline">In Progress</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Settings-1.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm mx-3">
                                {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-4">
                            <div class="symbol symbol-50 symbol-light">
                                <span class="symbol-label">
                                    <img src="{{ asset('media/svg/misc/003-puzzle.svg') }}" class="h-50 align-self-center"/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                            <div>
                                <span class="font-weight-bolder">Email:</span>
                                <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
                            </div>
                        </td>
                        <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                $560,000
                            </span>
                            <span class="text-muted font-weight-bold">
                                Paid
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                                Laravel, Metronic
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-success label-inline">Success</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Settings-1.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm mx-3">
                                {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-4">
                            <div class="symbol symbol-50 symbol-light">
                                <span class="symbol-label">
                                    <img src="{{ asset('media/svg/misc/005-bebo.svg') }}" class="h-50 align-self-center"/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                            <div>
                                <span class="font-weight-bolder">Email:</span>
                                <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
                            </div>
                        </td>
                        <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                $57,000
                            </span>
                            <span class="text-muted font-weight-bold">
                                Paid
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                AngularJS, C#
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-danger label-inline">Rejected</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Settings-1.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm mx-3">
                                {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-4">
                            <div class="symbol symbol-50 symbol-light">
                                <span class="symbol-label">
                                    <img src="{{ asset('media/svg/misc/014-kickstarter.svg') }}" class="h-50 align-self-center"/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                            <div>
                                <span class="font-weight-bolder">Email:</span>
                                <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
                            </div>
                        </td>
                        <td class="text-right">
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                $45,200,000
                            </span>
                            <span class="text-muted font-weight-bold">
                                Paid
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                                ReactJS, Ruby
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-warning label-inline">In Progress</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Settings-1.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm mx-3">
                                {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table> --}}
        </div>
    </div>
</div>

@push('scripts')
    <script>
    $(function () {
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('apis.DTUser') }}",
            columns: [
                // {
                //     data: 'DT_RowIndex',
                //     name: 'DT_RowIndex',
                //     orderable: false,
                //     searchable: false
                // },
                {data: 'avatar', name: 'avatar'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ],
                scrollY:        '35vh',
                scrollCollapse: true,
            // scrollCollapse: true,
            "columnDefs": [
                { className: "text-center", "targets": [ 0, 4, 5 ] }
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
                        param.code == 'success' ? swal.fire('Success', param.msg, param.code) : '';
                        param.code == 'error'   ? swal.fire('Oops', param.msg, param.code) : '';

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
@endpush
