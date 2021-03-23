@extends('layout.login')

@section('login')
<form action="#" class="sign-in-form" method="POST" action="{{ route('login') }}" autocomplete="off" id='form'>
    @csrf
    <h2 class="title">Sign in</h2>

    {{-- force auto complete  --}}
    <input id="username" type="text" style='display:none' name="fakeemail">
    <input id="password" type="password" style='display:none' name="fakepassword">

    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username"  class=" @error('email') is-invalid @enderror" name="email" id="email"  value="{{ old('email') }}" required autocomplete='off'/>
    </div>

    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password"  class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
    </div>

    <input type="submit" value="Login" class="btn solid" />

    {{-- <p class="social-text">Or Sign in with social platforms</p>
    <div class="social-media">
    <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
    </a>
    <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
    </a>
    </div> --}}
</form>


@endsection
