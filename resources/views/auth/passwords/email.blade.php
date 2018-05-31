@extends('layouts.app')

@section('content')
    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <h3 class="text-center m-0">
                    <a href="{{ route('home') }}" class="logo logo-admin"><img src="{{ asset('images/logo_dark.png')  }}" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 mb-3 text-center">Reset Password</h4>
                    <div class="alert alert-info" role="alert">
                        Enter your Email and instructions will be sent to you!
                    </div>

                    <form class="form-horizontal m-t-30" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter email" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary w-md waves-effect waves-light">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        <div class="m-t-40 text-center">
                            <p>Remember It ? <a href="{{ route('login')  }}" class="font-500 font-14 text-primary font-secondary"> Sign In Here </a> </p>
                            <p>© 2018 Fonik. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
