@if (Route::is('login', 'password.request', 'password.reset', 'login.admins', 'login.owners'))
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta name="description" content="{{ ThemeSetting()->theme_name }} Newspaper Website" />
  <meta name="keywords" content="{{ ThemeSetting()->theme_name }} Newspaper Website" />
  <meta name="author" content="{{ ThemeSetting()->theme_name }}" />
  <title>{{ ThemeSetting()->theme_name }}</title>
<link rel="apple-touch-icon" href="{{ asset(ThemeSetting()->favicon) }}" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset(ThemeSetting()->favicon) }}" />
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
        <meta name="description" content="{{ ThemeSetting()->theme_name }} Newspaper Website" />
        <meta name="keywords" content="{{ ThemeSetting()->theme_name }} Newspaper Website" />
        <meta name="author" content="{{ ThemeSetting()->theme_name }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ ThemeSetting()->theme_name }} Dashboard</title>
        <link rel="apple-touch-icon" href="{{ asset(ThemeSetting()->favicon) }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset(ThemeSetting()->favicon) }}" />
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
                            <a class="navbar-brand" target="_blank" href="{{ url('/') }}">
                                <img style="max-width: 25px" class="brand-logo" alt="stack admin logo" src="{{ asset(ThemeSetting()->favicon) }}" />
                                <h2 class="brand-text">{{ ThemeSetting()->theme_name }}</h2>
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
                                <span class="nav-link">{{ ThemeSetting()->theme_name }} Dashboard</span>
                            </li>

                        </ul>
                        <!-- PAGINATION END -->
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                  <span class="avatar avatar-online">
                                    <img src="{{ AuthUserProfileInfo()->profile == null ? asset('admin/images/portrait/small/avatar-s-1.png') : asset(Auth::guard(Session::get('role'))->user()->profile->profile) }}" alt="avatar"><i></i></span>
                                  <span class="user-name">{{ Auth::guard(Session::get('role'))->user()->name }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="{{ route('view.profile', user_name_slug(Auth::guard(Session::get('role'))->user()->name) ) }}"><i class="ft-user"></i> My Profile</a>
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
                    <li class="nav-item {{ Route::is('dashboard', 'dashboard.*') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"><i class="ft-home"></i><span class="menu-title">Dashboard</span></a>
                    </li>

                    <li class="nav-item {{ Route::is('admin.page', 'page.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.page') }}"><i class="ft-file"></i><span class="menu-title">Pages</span></a>
                    </li>

                    <li class="nav-item {{ Route::is('add.place.*') ? 'active' : '' }}">
                        <a href="{{ route('add.place.index') }}"><i class="ft-monitor"></i><span class="menu-title">Adds</span></a>
                    </li>

                    <li class="nav-item {{ Route::is('admin.news.*', 'admin.category.*', 'admin.breaking.*') ? 'open' : '' }}">
                        <a href="index.html"><i class="ft-airplay"></i><span class="menu-title">News</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('admin.news.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.news.index') }}">News</a></li>
                            <li class="{{ Route::is('admin.category.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.category.index') }}">Category</a></li>
                            <li class="{{ Route::is('admin.breaking.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.breaking.index') }}">Breaking News</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('gallery.images', 'gallery.videos') ? 'open' : '' }}">
                        <a href="#"><i class="ft-image"></i><span class="menu-title">Gallery</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('gallery.images') ? 'active' : '' }}"><a class="menu-item" href="{{ route('gallery.images') }}">Image Gallery</a></li>
                            <li class="{{ Route::is('gallery.videos') ? 'active' : '' }}"><a class="menu-item" href="{{ route('gallery.videos') }}">Video Gallery</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('contact.index', 'admin.comment.index') ? 'open' : '' }}">
                        <a href="#"><i class="ft-message-square"></i><span class="menu-title">Contact</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('contact.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('contact.index') }}">Contact form</a></li>
                            <li class="{{ Route::is('admin.comment.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.comment.index') }}">Comment</a></li>
                            <li class="{{ Route::is('admin.add.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.add.index') }}">Add Request</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('view.profile') ? 'open' : '' }}">
                        <a href="#"><i class="ft-unlock"></i><span class="menu-title">Authentication</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('view.profile') ? 'active' : '' }}"><a class="menu-item" href="{{ route('view.profile', user_name_slug(Auth::guard(Session::get('role'))->user()->name) ) }}">My Profile</a></li>
                            <li class="{{ Route::is('my.password.reset') ? 'active' : '' }}"><a class="menu-item" href="{{ route('my.password.reset') }}">Change Password</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('admin.socials', 'menu.*') ? 'open' : '' }}">
                        <a href="#"><i class="ft-feather"></i><span class="menu-title">Appearance</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('menu.index') ? 'active' : '' }}"><a class="menu-item" href="{{ route('menu.index') }}">Menu</a></li>
                            <li class="{{ Route::is('admin.socials') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.socials') }}">Social Media</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('users', 'users.*', 'user.*', 'admins.index') ? 'open' : '' }}">
                        <a href="#"><i class="ft-user"></i><span class="menu-title">Users</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('users') ? 'active' : '' }}"><a class="menu-item" href="{{ route('users') }}">All Authors</a></li>
                            <li class="{{ Route::is('admins.index') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admins.index') }}">All Admins</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('admin.wizard.*', 'admin.footer.*', 'admin.translation.edit') ? 'open' : '' }}">
                        <a href="#"><i class="ft-settings"></i><span class="menu-title">Sections</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('admin.wizard.edit') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.wizard.edit') }}">Wizard</a></li>
                            <li class="{{ Route::is('admin.footer.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.footer.edit') }}">Footer</a></li>
                            <li class="{{ Route::is('admin.translation.edit') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.translation.edit') }}">Translation</a></li>
                            <li class="{{ Route::is('subscriber.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('subscriber.index') }}">Subscriber</a></li>
                            <li class="{{ Route::is('admin.faq.*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin.faq.index') }}">Faq</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ Route::is('theme.edit') ? 'open' : '' }}">
                        <a href="#"><i class="ft-sliders"></i><span class="menu-title">Setting</span></a>
                        <ul class="menu-content">
                            <li class="{{ Route::is('theme.edit') ? 'active' : '' }}"><a class="menu-item" href="{{ route('theme.edit') }}">Theme Setting</a></li>
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
                    Copyright &copy; {{ ThemeSetting()->theme_name }} All rights reserved.
                </span>
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
        @elseif(Session::has('error'))
        <script>
            toastr.success("{{ Session::get('error') }}", "SORRY");
        </script>
        @endif
    </body>
</html>

@endif
