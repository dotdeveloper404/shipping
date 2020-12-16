<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') | {{ config('app.name') }}</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- Base Css Files -->
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/fontello/css/fontello.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/animate-css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/nifty-modal/css/component.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/magnific-popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/ios7-switch/ios7-switch.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/pace/pace.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/sortable/sortable-theme-bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/bootstrap-datepicker/css/datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/jquery-icheck/skins/all.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/jquery-notifyjs/styles/metro/notify-metro.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/prettify/github.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">

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
    <body class="fixed-left">
	    <!-- Begin page -->
	    <div id="wrapper">	
            <!-- Top Bar Start -->
            <div class="topbar">
                <div class="topbar-left">
                    <div class="logo">
                        <h1><a href="{{ route('welcome') }}"><img src="{{ asset('admin/assets/images/logo.png') }}"></a></h1>
                    </div>
                    <button class="button-menu-mobile open-left">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-collapse2">
                            <ul class="nav navbar-nav navbar-right top-navbar">
                                <li class="iconify hide-phone"><a href="javascript:void(0);" class="font-12 text-base">Rate Calculator</a></li>
                                <li class="iconify hide-phone"><a href="javascript:void(0);" class="font-12 text-base">Guides</a></li>
                                <li class="iconify hide-phone"><a href="javascript:void(0);" class="font-12 text-base">One Balance and Carriers</a></li>
                                <li class="iconify hide-phone"><a href="javascript:void(0);" class="font-12 text-base">Ready to Print</a></li>
                                <li class="iconify hide-phone"><a href="javascript:void(0);"><i class="icon-cog"></i> Settings</a></li>
                                <li class="iconify hide-phone"><a href="javascript:void(0);"><i class="icon-bell"></i></a></li>
                                <li class="iconify hide-phone"><a href="javascript:void(0);" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                                <li class="dropdown topbar-profile">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('profile') }}">My Profile</a></li>
                                        <li><a href="javascript:void(0);">Change Password</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('auth.logout') }}"><i class="icon-logout-1"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

		    <!-- Left Sidebar Start -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                <!-- Search form -->
                    <form role="search" class="navbar-form">
                        <div class="form-group">
                            <input type="text" placeholder="Order #, tracking #, recipient" class="form-control">
                            <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                    <!--- Profile -->
                    <div class="profile-info">
                        <div class="profile-text">Welcome <br><b>{{ auth()->user()->name }}</b></div>
                    </div>
                    <!--- Divider -->
                    <div class="clearfix"></div>
                    <hr class="divider" />
                    <div class="clearfix"></div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}" class="active">
                                    <i class='icon-layers'></i>
                                    <span>Welcome</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class='icon-layers'></i>
                                    <span>Quick Ship</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class='icon-layers'></i>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li class='has_sub'>
                                <a href='javascript:void(0);'>
                                    <i class='icon-layers'></i>
                                    <span>Shipments</span>
                                    <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul>
                                    <li><a href='javascript:void(0);'><span>Ready to Ship</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Ready for Payment</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Ready to Print</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Shipment History</span></a></li>
                                </ul>
                            </li>
                            <li class='has_sub'>
                                <a href='javascript:void(0);'>
                                    <i class='icon-layers'></i>
                                    <span>Products</span>
                                    <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul>
                                    <li><a href='javascript:void(0);'><span>Product Catalog</span></a></li>
                                </ul>
                            </li>
                            <li class='has_sub'>
                                <a href='javascript:void(0);'>
                                    <i class='icon-layers'></i>
                                    <span>Marketing</span>
                                    <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul>
                                    <li><a href='javascript:void(0);'><span>Welcome to Customer Marketing!</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Marketing Dashboard</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Contacts</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Email Campaigns</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Signup Forms</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Product Recommendations</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Branded Tracking & Notifications</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Marketing Settings</span></a></li>
                                </ul>
                            </li>
                            <li class='has_sub'>
                                <a href='javascript:void(0);'>
                                    <i class='icon-layers'></i>
                                    <span>Reports</span>
                                    <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul>
                                    <li><a href='javascript:void(0);'><span>Snapshot</span></a></li>
                                    <li><a href='javascript:void(0);'><span>Exports</span></a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->
        
		<!-- Start right content -->
        <div class="content-page">
            <div class="content">
			    <div class="h-100">
                    @yield('content')
                </div>
                <footer>
                    {{ config('app.name') }} &copy; 2020
                    <div class="footer-links pull-right">
                        <a href="javascript:;">About</a>
                        <a href="javascript:;">Support</a>
                        <a href="javascript:;">Terms of Service</a>
                        <a href="javascript:;">Legal</a>
                        <a href="javascript:;">Help</a>
                        <a href="javascript:;">Contact Us</a>
                    </div>
                </footer>
            </div>
        </div>
		<!-- End right content -->

	</div>
	<!-- End of page -->

	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<script src="{{ asset('admin/assets/libs/jquery/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jquery-detectmobile/detect.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/ios7-switch/ios7.switch.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/fastclick/fastclick.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jquery-blockui/jquery.blockUI.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/bootstrap-bootbox/bootbox.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jquery-sparkline/jquery-sparkline.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/nifty-modal/js/classie.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/nifty-modal/js/modalEffects.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/sortable/sortable.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/bootstrap-fileinput/bootstrap.file-input.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/bootstrap-select2/select2.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script> 
	<script src="{{ asset('admin/assets/libs/pace/pace.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jquery-notifyjs/notify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-notifyjs/styles/metro/notify-metro.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/jquery-icheck/icheck.min.js') }}"></script>
	<script src="{{ asset('admin/assets/libs/prettify/prettify.js') }}"></script>
	<script src="{{ asset('admin/assets/js/init.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
	</body>
</html>