@extends('layouts.master')

@section('title', 'Two Factor Authentication')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-header transparent">
                <h2>Two Factor Authentication</h2>
                <div class="additional-btn">
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <p>Two factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity. Two factor authentication protects against phishing, social engineering and password brute force attacks and secures your logins from attackers exploiting weak or stolen credentials.</p>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($data['user']->loginSecurity == null)
                    <form class="form-horizontal" method="POST" action="{{ route('generate2faSecret') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Generate Secret Key to Enable 2FA
                            </button>
                        </div>
                    </form>
                @elseif(!$data['user']->loginSecurity->google2fa_enable)
                    <p>1. Scan this QR code with your Google Authenticator App. Alternatively, you can use the code:</p>
                    <code>{{ $data['secret'] }}</code><br />
                    <img src="{{$data['google2fa_url'] }}">
                    <br /><br />

                    <p>2. Enter the pin from Google Authenticator app:</p>
                    <br /><br />
                    <form method="POST" action="{{ route('enable2fa') }}">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('verify-code') ? ' has-error' : '' }}">
                            <label for="secret">Authenticator Code</label>
                            <input type="password" name="secret" id="secret" class="form-control" required>
                            @if ($errors->has('verify-code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('verify-code') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enable 2FA</button>
                        </div>
                    </form>
                @elseif($data['user']->loginSecurity->google2fa_enable)
                    <div class="alert alert-success">
                        <p>2FA is currently <strong>enabled</strong> on your account.</p>
                    </div>
                    <p>If you are looking to disable Two Factor Authentication. Please confirm your password and Click Disable 2FA Button.</p>
                    <form method="POST" action="{{ route('disable2fa') }}">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="change-password">Current Password</label>
                            <input type="password" name="current-password" id="current-password" class="form-control" required>
                            @if ($errors->has('current-password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('current-password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ">Disable 2FA</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection