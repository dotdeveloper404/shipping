@extends('auth.layouts.master')

@section('title', 'Reset Password')

@section('content')
<p class="text-center"><a href="{{ route('password.update') }}"><img src="{{ asset('admin/assets/images/logo.png') }}" alt="Logo" width="150px"></a></p>
<div class="login-wrap animated flipInX">
    <div class="login-block">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group login-input">
                <i class="fa fa-user overlay"></i>
                <input type="email" name="email" id="email" class="form-control text-input" placeholder="Email" autocomplete="off" value="{{ old('email', $request->email) }}">
                @error('email')
                    <div class="test-white">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group login-input">
                <i class="fa fa-key overlay"></i>
                <input type="password" name="password" id="password" class="form-control text-input" placeholder="Password">
                @error('password')
                    <div class="test-white">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group login-input">
                <i class="fa fa-key overlay"></i>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control text-input" placeholder="Confirm Password">
                @error('password_confirmation')
                    <div class="test-white">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-info btn-block">Reset Password</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection