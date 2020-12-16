<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') | {{ config('app.name') }}</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <link rel="stylesheet" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/animate-css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/auth-custom.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{ asset('admin/assets/img/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('admin/assets/img/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('admin/assets/img/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('admin/assets/img/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('admin/assets/img/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('admin/assets/img/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('admin/assets/img/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('admin/assets/img/apple-touch-icon-152x152.png') }}">
    </head>
    <body class="fixed-left login-page">	
        <div class="container">
            <div class="full-content-center">
                @yield('content')
            </div>
        </div>
        <script src="{{ asset('admin/assets/libs/jquery/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/admin-custom.js') }}"></script>
	</body>
</html>