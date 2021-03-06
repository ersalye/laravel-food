@extends('admin.layouts.auth')

@section('content')
<div class="login bg-img" style="background-image: url({{asset('public/assets/img/login-bg.jpg')}});">
        <div class="login-overlay" style="background: linear-gradient(to right, rgb(43, 204, 93), rgba(58, 136, 71, 0.6));"></div>
        <div class="login-content">
            
            <div class="login-content-inner">
                <div class="login-head">
                    <h1 class="">{{Setting::get('site_title')}}</h1>
                    <h3>Login to Your Account</h3>
                    @include('include.alerts')
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email</label>
                         <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button class="btn btn-success btn-block">Login</button>
                    <a href="{{ url('/shop/password/reset') }}" class="forgot-link">Forgot Password?</a>
                    <a href="{{url('/shop/register')}}" style="margin-left: 170px;" class="forgot-link">Signup</a>
                </form>
            </div>
            
        </div>
    </div>
@endsection