@extends('auth.layouts.master')

@section('title', 'Two Factor Authentication')

@section('content')
<p class="text-center"><a href="{{ route('home') }}"><img src="{{ asset('admin/assets/images/logo.png') }}" alt="Logo" width="150px"></a></p>
<div class="login-wrap animated flipInX">
    <div class="login-block">
        <h3 class="text-white">Two Factor Authentication</h3>
        <p class="text-white">Two factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity. Two factor authentication protects against phishing, social engineering and password brute force attacks and secures your logins from attackers exploiting weak or stolen credentials.</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <p>Enter the pin from Google Authenticator app:</p>
        <form action="{{ route('2faVerify') }}" method="POST">
            {{ csrf_field() }}
            <label for="one_time_password">One Time Password</label>
            <div class="form-group login-input {{ $errors->has('one_time_password-code') ? ' has-error' : '' }}">
                <i class="fa fa-key overlay"></i>
                <input type="text" name="one_time_password" id="one_time_password" class="form-control text-input" required>
            </div>
            <button type="submit" class="btn btn-primary">Authenticate</button>
        </form>
    </div>
</div>
@endsection