@extends('layouts.login')

@section('content')
    <div class="content-error">
        <div class="hpanel">
            <div class="panel-default panel-danger">
                <form action="{{route('login')}}" id="loginForm" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4" style="margin-top: 150px">
                            <label  class="control-label" for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" placeholder="example@gmail.com"
                                   title="Please enter you username" class="form-control
                                   @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}"
                                   required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <label class="control-label" for="password">{{ __('Password') }}</label>
                            <input type="password" title="Please enter your password" placeholder="******" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="checkbox login-checkbox">
                                <label>
                                    <input class="i-checks" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me </label>
                            </div>
                            <button class="btn btn-danger btn-block loginbtn"> {{ __('Login') }}</button>
                            @if (Route::has('password.request'))
                                {{-- <a class="" href="{{ route('password.request') }}">
                                     {{ __('Forgot Your Password?') }}
                                 </a>--}}
                            @endif
                            <a class="btn btn-default btn-block" href="#">Register</a>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
