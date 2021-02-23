@include('header')

<div class="container-loginRegister">
    <h1>Login Form</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf



        <div class="input-username">
            <input placeholder="Username" id="email" type="email" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="input-password">
            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="btn-login">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>

        <div class="forgot-password">
            @if (Route::has('password.request'))
            <a class="link-forgot" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>


    </form>
    <div class="register-now">
        <a class="link-forgot" href="{{ route('register') }}">
            {{ __('Register Now') }}
        </a>
    </div>
</div>