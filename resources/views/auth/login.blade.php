@extends('layouts.app')
@section('extra-css')
<style>
    section#content {
        padding-top: 80px;
        padding-bottom: 20px;
    }
    .login-form{
        margin:15px;
    }
    .bg-success {
     background-color: #3097D1 !important;
     border-color:#3097D1 !important;
    }
    .panel-heading{
        font-size:23px;
        font-weight:700;
        color:#FFF!important;;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-success">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                       <div class="row">
                           <div class="col-md-8  col-md-offset-2">
                                     {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" >Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif                           
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="form-group">                                    
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>                                   
                                </div>
                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    
                                </div>
                           </div>
                       </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
