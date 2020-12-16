@extends('auth.layouts.master')

@section('title', 'Login')

@section('content')
<p class="text-center"><a href="{{ route('home') }}"><img src="{{ asset('admin/assets/images/logo.png') }}" alt="Logo" width="150px"></a></p>
<div class="login-wrap animated flipInX">
    @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <div class="login-block">
        <img src="{{ asset('admin/assets/images/users/default-user.png') }}" class="img-circle not-logged-avatar">
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="form-group login-input">
                <i class="fa fa-user overlay"></i>
                <input type="email" name="email" id="email" class="form-control text-input" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
                @error('email')
                    <div class="test-white">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group login-input">
                <i class="fa fa-key overlay"></i>
                <input type="password" name="password" id="password" class="form-control text-input" placeholder="Password" autocomplete="current-password">
                @error('password')
                    <div class="test-white">{{ $message }}</div>
                @enderror
            </div>
            <div class="from-group">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>{{ __('Remember Me') }}</span>
                </label>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-info btn-block">LOGIN</button>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <p>New Here? <a href="{{ route('register') }}">Create an Account</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection