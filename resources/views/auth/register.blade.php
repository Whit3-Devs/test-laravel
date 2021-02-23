@include('header')




<div class="container-loginRegister">
  <h1>Register Form</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

            <div class="input-fullname">
                <input placeholder="Your Fullname" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-email">
                <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-password">
                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-confirmpassword">
                <input placeholder="Password Confirm" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="btn-register">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
    </form>
    <div class="have-account">
      <a class="link-forgot" href="{{ route('login') }}">
          {{ __('Have an account? Login here') }}
      </a>
  </div>
</div>


