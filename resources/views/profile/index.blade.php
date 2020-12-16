@extends('layouts.master')

@section('title', 'Profile')

@section('content')
<div class="page-heading">
    <h1><i class='icon-user'></i> Profile</h1>
    <h3>My Profile</h3>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-header transparent">
                <h2>Edit Profile</h2>
                <div class="additional-btn">
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <div class="widget-content padding">	
                <div class="row">
                    <div class="col-md-6">
                        <div id="basic-form">
                            @if(session('msg'))
                                @if(session('msg')['type'] == 'success')
                                    <div class="alert alert-success">{{ session('msg')['text'] }}</div>
                                @endif
                                @if(session('msg')['type'] == 'error')
                                    <div class="alert alert-danger">{{ session('msg')['text'] }}</div>
                                @endif
                            @endif
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Fullname</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Fullname" value="{{ auth()->user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>						
            </div>
        </div>
    </div>
</div>
@endsection