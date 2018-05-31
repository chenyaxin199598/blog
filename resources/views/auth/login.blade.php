@extends('layouts.app')

@section('content')
    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="{{ route('home') }}" class="logo logo-admin"><img src="{{ asset('images/logo_dark.png')  }}" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">{{ __('Welcome Back !') }}</h4>
                    <p class="text-muted text-center">Sign in to continue to Blog.</p>

                    <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="userpassword">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customControlInline" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Login') }}</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    <i class="mdi mdi-lock"></i> {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                        <div class="m-t-40 text-center">
                            <p>Don't have an account ? <a href="{{ route('register') }}" class="font-500 font-14 text-primary font-secondary"> SignUp Now </a> </p>
                            <p>© 2018 Fonik. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection