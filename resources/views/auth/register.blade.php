<form class="sign-up-form" method="POST" action="{{ route('register') }}">
    @csrf

    <h2 class="title">Register Now</h2>
    
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="name"  class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required />
         {{-- @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror --}}
    </div>
    
    <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        {{-- @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror --}}
    </div>
    
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        {{-- @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror --}}
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
    
    <input type="submit" class="btn" value="Register" />
    {{-- <p class="social-text">Or Sign up with social platforms</p> --}}

</form>