<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

		<link href="{{ asset('css/pages/login/slide-login.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
        <style>
        .toast:after {
            background-size: 1rem;
            background-repeat: no-repeat;
            left: 1.268rem;
            top: 1.20rem;
            width: 1rem;
            height: 1rem;
        }

        .container:before {
            background-image: linear-gradient(
        147.04deg
        ,#ca7b70 .74%,#5a2119 99.61%);
        }

        .btn:hover {
            background-color: #5a2119;
        }

        .btn {
            background-color: #8e4b41;
        }
        </style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body>
		<!--begin::Main-->
		<div class="container">
            <div class="forms-container">
                <div class="signin-signup">

                @yield('login')

                @include('auth.register')

                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                    ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                    Register
                    </button>
                </div>
                {{-- <img src="{{ asset('media/slide-login/img/log.svg')}}" class="image" alt="" /> --}}
                <img src="{{ asset('img/Startup life-pana.png')}}" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                    laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                    Sign in
                    </button>
                </div>
                {{-- <img src="{{ asset('media/slide-login/img/register.svg')}}" class="image" alt="" /> --}}
                <img src="{{ asset('img/Security-rafiki.svg')}}" class="image" alt="" />
                </div>
            </div>
            </div>
		<!--end::Main-->

		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		{{-- <script src="{{ asset('js/scripts.bundle.js') }}"></script> --}}
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script>

        const sign_in_btn   = document.querySelector("#sign-in-btn");
        const sign_up_btn   = document.querySelector("#sign-up-btn");
        const container     = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
        });
        @error('password')
            container.classList.add("sign-up-mode");
        @enderror
        @error('email')
            container.classList.add("sign-up-mode");
        @enderror
        @error('name')
            container.classList.add("sign-up-mode");
        @enderror
        </script>
		<!--end::Page Scripts-->

        @include('sweetalert::alert')
        @include('layout.component.toastr.toastr')
	</body>
	<!--end::Body-->
</html>
