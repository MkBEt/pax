@extends('frontend.master_frontend')
@section('stylesheet')
    <link href="{{url('css/signin.css')}}" rel="stylesheet">
@endsection
@section('content')
    @if (Session::has('registration_success'))
  
      <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{ Session::get('registration_success') }}
      </div>

    @endif
    <form class="form-signin" method="POST" action="{{ route('login') }}">
      @csrf
      <h1 class="h3 mb-3 font-weight-normal">Please LogIn</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      {{-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> --}}
      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
      <label for="inputPassword" class="sr-only">Password</label>
      {{-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> --}}
      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

      <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
        </label>
      </div>
      {{-- <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button> --}}
      <button type="submit" class="btn btn-lg btn-primary btn-blocky">
          {{ __('Login') }}
      </button>

      <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
      </a>
      {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> --}}
    </form>
@endsection
