<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ ThemeSetting()->theme_name }}</title>
        <meta name="description" content="Newsly Responsive  HTML5 Template " />
        <meta name="keywords" content="" />
        <meta name="author" content="Newsly" />
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="{{ asset(ThemeSetting()->favicon) }}" type="image/x-icon">
        <!-- fonts file -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- css file  -->
        <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
        <script src="{{ asset('front/js/modernizr-3.11.2.min.js') }}"></script>
    </head>
    <body>
        <!-- header area start here -->
        <header class="header-area d-none d-lg-block">
            @yield('breaking_news')

            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="logo-area">
                                <a href="{{ url('/') }}"><img src="{{ asset(ThemeSetting()->logo) }}" alt="{{ ThemeSetting()->theme_name }}" /></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-search">
                                <form action="{{ route('news.search') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="search" name="search"  placeholder="Search News"/>
                                        <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 text-md-right">
                            <div class="dropdown language-dropdown">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                                   <img class="flag" src="{{ active_lang() == 'pl' ? asset(ThemeSetting()->	pl_flag) : asset(ThemeSetting()->sl_flag) }}" alt="flag" /> <span>{{ active_lang() == 'pl' ? ThemeSetting()->pl_name : ThemeSetting()->sl_name }}</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('lang.forgot') }}">{{ ThemeSetting()->pl_name }}</a>
                                    <a class="dropdown-item" href="{{ route('change.lang') }}">{{ ThemeSetting()->sl_name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-wrap">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <div class="header-bottom-left d-flex">
                                    <div class="catagory-area">
                                        <ul class="catagory-menu">
                                            <li>
                                                <a href="#"><img class="icon" src="{{ asset('front/images/line-bar.png') }}" alt="line bar" /> {{ active_lang() == 'pl' ? translate()->pl_two :  translate()->sl_two}}</a>
                                                <ul class="catagory-list">
                                                    @if(active_lang() == 'sl')
                                                    @foreach (Categories() as $category)
                                                    <li><a href="{{ route('front.category', $category->sl_slug) }}">{{ $category->sl_name }}<span class="catagory-count">[{{ $category->news->count() }}]</span></a></li>
                                                    @endforeach
                                                    @else
                                                    @foreach (Categories() as $category)
                                                    <li><a href="{{ route('front.category', $category->pl_slug) }}">{{ $category->pl_name }}<span class="catagory-count">[{{ $category->news->count() }}]</span></a></li>
                                                    @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-area">
                                        <nav class="main-menu">
                                            <ul>
                                                @if(active_lang() == 'sl')
                                                @foreach (MainMenu() as $mainMenu)
                                                <li class="current-menu-item"><a href="{{ url($mainMenu->url) }}">{{ $mainMenu->sl_label }}</a></li>
                                                @endforeach
                                                @else
                                                @foreach (MainMenu() as $mainMenu)
                                                <li class="current-menu-item"><a href="{{ url($mainMenu->url) }}">{{ $mainMenu->pl_label }}</a></li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 text-md-right">
                                <div class="follow-area">
                                    <ul>
                                        <li>Follow:</li>
                                        @foreach (SocialMedia() as $social_small)
                                        @if ($loop->iteration > 4)
                                            @continue
                                        @endif
                                        <li><a href="{{ $social_small->social_link }}"><i class="{{ $social_small->icon_class }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end here -->
        <!-- mobile header area htart here  -->
        <div class="mobile-header-area d-block d-lg-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="heaer-left">
                            <div class="logo-area">
                                <a href="index.html"><img src="{{ asset(ThemeSetting()->logo) }}" alt="{{ ThemeSetting()->theme_name }}" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-right text-right">
                            <ul>
                                <li><a class="search-bar" href="#"><i class="fas fa-search"></i></a></li>
                                <li><a class="menu-bar" href="#"><i class="fas fa-bars"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-search">
                    <form action="{{ route('news.search') }}" method="POST">
                        @csrf
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" id="msearch" name="search"  placeholder="Search News"/>
                            <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- mobile header area htart here  -->

        <!-- sidebar area start here  -->
        <aside class="sidebar-area">
            <div class="dropdown language-dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                    <img class="flag" src="{{ active_lang() == 'pl' ? asset(ThemeSetting()->pl_flag) : asset(ThemeSetting()->sl_flag) }}" alt="flag" /> <span>{{ active_lang() == 'pl' ? ThemeSetting()->pl_name : ThemeSetting()->sl_name }}</span>
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="{{ route('lang.forgot') }}">{{ ThemeSetting()->pl_name }}</a>
                     <a class="dropdown-item" href="{{ route('change.lang') }}">{{ ThemeSetting()->sl_name }}</a>
                 </div>
            </div>
            <div class="follow-area">
                <ul>
                    <li>Follow:</li>
                    @foreach (SocialMedia() as $social_small)
                    @if ($loop->iteration > 4)
                        @continue
                    @endif
                    <li><a href="{{ $social_small->social_link }}"><i class="{{ $social_small->icon_class }}"></i></a></li>
                    @endforeach
                </ul>
            </div>
            <ul class="nav nav-tabs" id="sidebarTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="menu-tab" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="catagory-tab" data-toggle="tab" href="#catagory" role="tab" aria-controls="catagory" aria-selected="false">Categories</a>
                </li>
            </ul>
                <div class="tab-content" id="sidebarTabContent">
                <div class="tab-pane fade show active" id="menu" role="tabpanel" aria-labelledby="menu-tab">
                    <nav class="mobile-menu">
                        <ul>
                            @if(active_lang() == 'sl')
                            @foreach (MainMenu() as $mainMenu)
                            <li class="current-menu-item"><a href="{{ url($mainMenu->url) }}">{{ $mainMenu->sl_label }}</a></li>
                            @endforeach
                            @else
                            @foreach (MainMenu() as $mainMenu)
                            <li class="current-menu-item"><a href="{{ url($mainMenu->url) }}">{{ $mainMenu->pl_label }}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="catagory" role="tabpanel" aria-labelledby="catagory-tab">
                    <ul class="catagory-list">
                        @if(active_lang() == 'sl')
                        @foreach (Categories() as $category)
                        <li><a href="{{ route('front.category', $category->sl_slug) }}">{{ $category->sl_name }}<span class="catagory-count">[{{ $category->news->count() }}]</span></a></li>
                        @endforeach
                        @else
                        @foreach (Categories() as $category)
                        <li><a href="{{ route('front.category', $category->pl_slug) }}">{{ $category->pl_name }}<span class="catagory-count">[{{ $category->news->count() }}]</span></a></li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </aside>
        <!-- sidebar area end here  -->
        @yield('content')


        <!-- footer area start  -->
        @if(active_lang() == 'pl')
        <footer class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row align-content-center">
                        <div class="col-sm-3">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset(ThemeSetting()->footer_logo) }}" alt="{{ ThemeSetting()->theme_name }}" /></a>
                            </div>
                        </div>
                        <div class="col-sm-9 text-sm-right">
                            <ul class="social-media">
                                @foreach (FooterMenu() as $footer_menu_item)
                                <li><a href="{{ url($footer_menu_item->url) }}">{{ $footer_menu_item->pl_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-widget most-viwed-post">
                                <h3 class="widget-title">{!! HeadingStyle(translate()->pl_eleven) !!}</h3>
                                <ul>
                                    @if (Footer()->wizard_one_by == 1)
                                    @foreach (MostVisitedNews(Footer()->wizard_one_count + 1) as $most_view)
                                    @foreach (DB::table('news')->where('id', $most_view->news_id)->orderBy('created_at', 'DESC')->get() as $nost_view_news)
                                    <li>
                                        <span class="date">{{ \Carbon\Carbon::parse($nost_view_news->created_at)->format('M d, Y') }}</span>
                                        <a href="{{ route('single.news', $nost_view_news->pl_slug) }}">{{ $nost_view_news->pl_headline }}</a>
                                    </li>
                                    @endforeach
                                    @endforeach
                                    @else
                                    @foreach (MostRecentPost(Footer()->wizard_one_count) as $most_recent_footer)
                                    <li>
                                        <span class="date">{{ \Carbon\Carbon::parse($most_recent_footer->created_at)->format('M d, Y') }}</span>
                                        <a href="{{ route('single.news', $most_recent_footer->pl_slug) }}">{{ $most_recent_footer->pl_headline }}</a>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-widget widget-menu">
                                <h3 class="widget-title">{!! HeadingStyle(translate()->pl_twelve) !!}</h3>
                                <ul>
                                    @foreach (FooterMenu() as $footer_menu)
                                    <li><a href="{{ url($footer_menu->url) }}">{{ $footer_menu->pl_label }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-widget widget-menu">
                                <h3 class="widget-title">{!! HeadingStyle(translate()->pl_thirteen) !!}</h3>
                                <ul>
                                    @foreach (explode(',', Footer()->categories) as $footer_cat_count)
                                    @foreach (AllCategories() as $FooterCat)
                                    @if ($FooterCat->id == $footer_cat_count)
                                    <li><a href="{{ route('front.category', $FooterCat->pl_slug) }}">{{ $FooterCat->pl_name }}</a></li>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-widget fashsion-news">
                                <h3 class="widget-title">{!! HeadingStyle(translate()->pl_twenty_eight) !!}</h3>
                                <ul>
                                    @foreach (FooterGallery() as $footer_gallery)
                                    <li><a href="{{ route('single.news', $footer_gallery->pl_slug) }}"><img style="max-width: 112px" src="{{ asset($footer_gallery->image->image_four) }}" alt="{{ $footer_gallery->image->image_alt }}" /></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright-area text-center text-sm-left">
                                {!! ThemeSetting()->copyright !!}
                            </div>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right">
                            <div class="footer-menu">
                                <a href="{{ url('/privacy-policy') }}">Privacy & Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        @else

        <footer class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row align-content-center">
                        <div class="col-sm-3">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset(ThemeSetting()->footer_logo) }}" alt="{{ ThemeSetting()->theme_name }}" /></a>
                            </div>
                        </div>
                        <div class="col-sm-9 text-sm-right">
                            <ul class="social-media">
                                @foreach (FooterMenu() as $footer_menu_item)
                                <li><a href="{{ $footer_menu_item->url }}">{{ $footer_menu_item->sl_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-widget most-viwed-post">
                                <h3 class="widget-title">{!! HeadingStyle(translate()->sl_eleven) !!}</h3>
                                <ul>
                                    @if (Footer()->wizard_one_by == 1)
                                    @foreach (MostVisitedNews(Footer()->wizard_one_count + 1) as $most_view)
                                    @foreach (DB::table('news')->where('id', $most_view->news_id)->orderBy('created_at', 'DESC')->get() as $nost_view_news)
                                    <li>
                                        <span class="date">{{ \Carbon\Carbon::parse($nost_view_news->created_at)->format('M d, Y') }}</span>
                                        <a href="{{ route('single.news', $nost_view_news->sl_slug) }}">{{ $nost_view_news->sl_headline }}</a>
                                    </li>
                                    @endforeach
                                    @endforeach
                                    @else
                                    @foreach (MostRecentPost(Footer()->wizard_one_count) as $most_recent_footer)
                                    <li>
                                        <span class="date">{{ \Carbon\Carbon::parse($most_recent_footer->created_at)->format('M d, Y') }}</span>
                                        <a href="{{ route('single.news', $most_recent_footer->sl_slug) }}">{{ $most_recent_footer->sl_headline }}</a>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-widget widget-menu">
                                <h3 class="widget-title">{!! HeadingStyle(translate()->sl_twelve) !!}</h3>
                                <ul>
                                    @foreach (FooterMenu() as $footer_menu)
                                    <li><a href="{{ url($footer_menu->url) }}">{{ $footer_menu->sl_label }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-widget widget-menu">
                                <h3 class="widget-title">{!! HeadingStyle(translate()->sl_thirteen) !!}</h3>
                                <ul>
                                    @foreach (explode(',', Footer()->categories) as $footer_cat_count)
                                    @foreach (AllCategories() as $FooterCat)
                                    @if ($FooterCat->id == $footer_cat_count)
                                    <li><a href="{{ route('front.category', $FooterCat->sl_slug) }}">{{ $FooterCat->sl_name }}</a></li>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-widget fashsion-news">
                                <h3 class="widget-title">{!! HeadingStyle(translate()->sl_twenty_eight) !!}</h3>
                                <ul>
                                    @foreach (FooterGallery() as $footer_gallery)
                                    <li><a href="{{ route('single.news', $footer_gallery->sl_slug) }}"><img style="max-width: 112px" src="{{ asset($footer_gallery->image->image_four) }}" alt="{{ $footer_gallery->image->image_alt }}" /></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright-area text-center text-sm-left">
                                {!! ThemeSetting()->copyright !!}
                            </div>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right">
                            <div class="footer-menu">
                                <a href="{{ url('/privacy-policy') }}">Privacy & Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        @endif

        <!-- footer area end  -->
        <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/js/plugins.js') }}"></script>
        <script src="{{ asset('front/js/main.js') }}"></script>
        @yield('custom_js')
    </body>
</html>
