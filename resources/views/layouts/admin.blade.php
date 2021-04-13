@if (Route::is('login', 'password.request'))
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Login Page - Stack Responsive Bootstrap 4 Admin Template</title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors.css') }}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/app.css') }}">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/login-register.css') }}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        @yield('content')
    </div>
</div>
</div>

</body>
</html>

@else



































<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
        <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app" />
        <meta name="author" content="PIXINVENT" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Responsive Bootstrap 4 Admin Template</title>
        <link rel="apple-touch-icon" href="{{ asset('admin/images/ico/apple-icon-120.png') }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/ico/favicon.ico') }}" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/plugins/extensions/toastr.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/extensions/toastr.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN PLUGINS -->
        @yield('css_plugin')
        <!-- END PLUGINS -->
        <!-- BEGIN STACK CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/app.css') }}" />
        <!-- END STACK CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/core/menu/menu-types/vertical-menu.css') }}" />
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}" />
        <!-- END Custom CSS-->

    </head>
    <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <!-- fixed-top-->
        <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mobile-menu d-md-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="index.html">
                                <img class="brand-logo" alt="stack admin logo" src="{{ asset('admin/images/logo/stack-logo-light.png') }}" />
                                <h2 class="brand-text">Stack</h2>
                            </a>
                        </li>
                        <li class="nav-item d-md-none">
                            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-container content">
                    <div class="collapse navbar-collapse" id="navbar-mobile">
                        <!-- PAGINATION START -->
                        <ul class="nav navbar-nav mr-auto float-left">
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                    <i class="ft-menu"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link">/</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Categories</a>
                            </li>
                        </ul>
                        <!-- PAGINATION END -->
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                    <i class="ficon ft-bell"></i>
                                    <span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Notifications</span>
                                            <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                                        </h6>
                                    </li>
                                    <li class="scrollable-container media-list">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading red darken-1">99% Server load</h6>
                                                    <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Complete the task</h6>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Generate monthly report</h6>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                  <span class="avatar avatar-online">
                                    <img src="{{ asset('admin/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i></span>
                                  <span class="user-name">John Doe</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#"><i class="ft-user"></i> My Profile</a>
                                  <form action="{{ route('logout') }}" method="POST">
                                      @csrf
                                      <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();"><i class="ft-power"></i> Logout</a>
                                  </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item {{ Route::is('dashboard', 'dashboard.*') ? 'open' : '' }}">
                        <a href="index.html"><i class="ft-home"></i><span class="menu-title">Dashboard</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('dashboard') ? 'active' : '' }}"><a class="menu-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a class="menu-item" href="#">Analytics</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('admin.news.*', 'admin.category.*') ? 'open' : '' }}">
                        <a href="index.html"><i class="ft-airplay"></i><span class="menu-title">News</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('admin.news.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.news.index') }}">News</a></li>
                            <li class="{{ Route::is('admin.category.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.category.index') }}">Category</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#"><i class="ft-image"></i><span class="menu-title">Gallery</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#">Image Gallery</a></li>
                            <li><a class="menu-item" href="#">Video Gallery</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#"><i class="ft-message-square"></i><span class="menu-title">Contact</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#">Comment</a></li>
                            <li><a class="menu-item" href="#">Add Request</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#"><i class="ft-unlock"></i><span class="menu-title">Authentication</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#">My Profile</a></li>
                            <li><a class="menu-item" href="#">Change Password</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('admin.socials') ? 'open' : '' }}">
                        <a href="#"><i class="ft-feather"></i><span class="menu-title">Appearance</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#">Menu</a></li>
                            <li class="{{ Route::is('admin.socials') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.socials') }}">Social Media</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('users', 'users.*', 'user.*') ? 'open' : '' }}">
                        <a href="#"><i class="ft-user"></i><span class="menu-title">Users</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('users') ? 'active' : '' }}"><a class="menu-item" href="{{ route('users') }}">All users</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('admin.wizard.*', 'admin.footer.*', 'admin.translation.edit') ? 'open' : '' }}">
                        <a href="#"><i class="ft-settings"></i><span class="menu-title">Sections</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('admin.wizard.edit') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.wizard.edit') }}">Wizard</a></li>
                            <li class="{{ Route::is('admin.footer.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.footer.edit') }}">Footer</a></li>
                            <li class="{{ Route::is('admin.translation.edit') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.translation.edit') }}">Translation</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#"><i class="ft-sliders"></i><span class="menu-title">Setting</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#">App Setting</a></li>
                            <li><a class="menu-item" href="#">Role & Permission</a></li>
                            <li><a class="menu-item" href="#">Email Setting</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-body">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <footer class="footer footer-static footer-light navbar-border">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
                <span class="float-md-left d-block d-md-inline-block">
                    Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved.
                </span>
                <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
            </p>
        </footer>
        <!-- BEGIN VENDOR JS-->
        <script src="{{ asset('admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}" type="text/javascript"></script>
        <!-- END VENDOR JS-->

        <!-- BEGIN STACK JS-->
        <script src="{{ asset('admin/js/core/app-menu.min.js') }}" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL JS-->

        <!-- END PAGE LEVEL JS-->
        <script src="{{ asset('admin/js/core/app.min.js') }}" type="text/javascript"></script>
        @yield('js_plugin')
        <script src="{{ asset('admin/js/scripts/customizer.js') }}" type="text/javascript"></script>
        <!-- END STACK JS-->


        <script src="{{ asset('admin/js/custom.js') }}" type="text/javascript"></script>

        @yield('custom_js')

        @if(Session::has('store'))
        <script>
            toastr.success("{{ Session::get('store') }}", "WELL DONE");
        </script>
        @elseif(Session::has('update'))
        <script>
            toastr.success("{{ Session::get('update') }}", "WELL DONE");
        </script>
        @endif
    </body>
</html>

@endif
