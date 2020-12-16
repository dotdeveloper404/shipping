@extends('auth.layouts.master')

@section('title', 'Forgot your password')

@section('content')
<p class="text-center"><a href="{{ route('home') }}"><img src="{{ asset('admin/assets/images/logo.png') }}" alt="Logo" width="150px"></a></p>
<div class="login-wrap animated flipInX">
    @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <div class="login-block">
        <p class="text-white">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group login-input">
                <i class="fa fa-user overlay"></i>
                <input type="email" name="email" id="email" class="form-control text-input" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
                @error('email')
                    <div class="test-white">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-info btn-block">Email Password Reset Link</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection