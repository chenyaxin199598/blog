@extends('layouts.app')

@section('content')
    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-header">{{ __('Reset Password') }}</div>
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="{{ route('home') }}" class="logo logo-admin"><img src="{{ asset('images/logo_dark.png')  }}" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">

                    <form class="form-horizontal m-t-30" method="POST" action="{{ route('password.request') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter confirm password" name="password_confirmation" required>
                        </div>

                        <div class="form-group m-t-20">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Reset Password') }}</button>
                            </div>
                        </div>

                        <div class="m-t-40 text-center">
                            <p>Already have an account ? <a href="{{ route('login')  }}" class="font-500 font-14 text-primary font-secondary"> Login </a> </p>
                            <p>© 2018 May. Crafted with <i class="mdi mdi-heart text-danger"></i> by Coding</p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
