{{-- Signature
Owner: Farhan Riuzaki
Email: riuzakif@gmail.com
Phone: +6285759269239
Hostly concatc me for more information --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
    <head>
        <meta charset="utf-8"/>

        {{-- Title Section --}}
        <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

        {{-- Meta Data --}}
        <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        {{-- Global Theme Styles (used by all pages) --}}
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Includable CSS --}}
        @yield('styles')
        <style>
            .datatable-head {
                text-align: center !important;
                font-weight: bold;
            }
        </style>
    </head>

    <body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>

        @if (config('layout.page-loader.type') != '')
            @include('layout.partials._page-loader')
        @endif

        @include('layout.base._layout')

        <script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        {{-- Global Theme JS Bundle (used by all pages)  --}}
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach

        {{-- Includable JS --}}
        @yield('scripts')

        @stack('scripts')

        {{-- sweetalert --}}
        {{-- @include('sweetalert::alert') --}}

        {{-- custom toaster --}}
        @include('layout.component.toastr.toastr')


        <script>
        function CheckValidation(){
            // $("#MyForm").validate({
            //     debug: true,
            //     messages:{
            //         'confirm-password': {
            //             equalTo: "**password not match"
            //         }
            //     },
            // });
            var frmvalid = $("#MyForm").valid();
            // console.log(frmvalid);
            if (!frmvalid) {
                return false;
            }else{
                $("#MyForm").submit();
            }
        }

            // FUNGSI DELETE DENGAN AJAX ALL FORM
        $('body').on('click', '.btn-delete', function (e) {
            e.preventDefault();
            var url = $(this).data('remote');

            swal.fire({
            title: 'Are you sure?',
            text: "It will permanently deleted !",
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
                            _method: 'DELETE',
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
    </body>
</html>
