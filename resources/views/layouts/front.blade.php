<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        @if (Route::is('front.index'))
        <title>{{ ThemeSetting()->theme_name }} | {{ pageSeoInfo('/')[active_lang().'_title'] }}</title>
        <meta name="description" content="{{ pageSeoInfo('/')[active_lang().'_description'] }} " />
        @elseif (Route::is('front.privacy'))
        <title>{{ ThemeSetting()->theme_name }} | {{ pageSeoInfo('privacy-policy')[active_lang().'_title'] }}</title>
        <meta name="description" content="{{ pageSeoInfo('privacy-policy')[active_lang().'_description'] }} " />
        @elseif (Route::is('front.cookies'))
        <title>{{ ThemeSetting()->theme_name }} | {{ pageSeoInfo('cookies')[active_lang().'_title'] }}</title>
        <meta name="description" content="{{ pageSeoInfo('cookies')[active_lang().'_description'] }} " />
        @elseif (Route::is('front.contact'))
        <title>{{ ThemeSetting()->theme_name }} | {{ pageSeoInfo('contact')[active_lang().'_title'] }}</title>
        <meta name="description" content="{{ pageSeoInfo('contact')[active_lang().'_description'] }} " />
        @elseif (Route::is('front.faq'))
        <title>{{ ThemeSetting()->theme_name }} | {{ pageSeoInfo('faq')[active_lang().'_title'] }}</title>
        <meta name="description" content="{{ pageSeoInfo('faq')[active_lang().'_description'] }} " />
        @elseif (Route::is('front.request.add'))
        <title>{{ ThemeSetting()->theme_name }} | {{ pageSeoInfo('request-add')[active_lang().'_title'] }}</title>
        <meta name="description" content="{{ pageSeoInfo('request-add')[active_lang().'_description'] }} " />
        @elseif (Route::is('front.category'))
        <title>{{ ThemeSetting()->theme_name }} | {{ $cat[active_lang().'_name'] }}</title>
        <meta name="description" content="{{ ThemeSetting()->theme_name }}" />
        @elseif (Route::is('search.result', 'search.result.*'))
        <title>{{ ThemeSetting()->theme_name }} | {{ $result }}</title>
        <meta name="description" content="{{ ThemeSetting()->theme_name }}" />
        @elseif (Route::is('single.news'))
        <title>{{ ThemeSetting()->theme_name }} | {{ $news[active_lang().'_headline'] }}</title>
        <meta name="description" content="{{ $news[active_lang().'_headline'] }}" />
        <meta name="keywords" content="{{ $news[active_lang().'_tags'] }}" />
        @else
        <title>{{ ThemeSetting()->theme_name}}</title>
        <meta name="description" content="{{ ThemeSetting()->theme_name }}" />
        @endif


        <meta name="author" content="{{ ThemeSetting()->theme_name }}" />
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="{{ asset(ThemeSetting()->favicon) }}" type="image/x-icon">
        <!-- fonts file -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- css file  -->
        <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/plugins/extensions/toastr.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/extensions/toastr.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        @if (ThemeSetting()->layout == 'rtl')
        <link rel="stylesheet" href="{{ asset('front/css/style_rtl.css') }}">
        @endif

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
                                   <img class="flag" src="{{ active_lang() == 'pl' ? asset(ThemeSetting()->pl_flag) : asset(ThemeSetting()->sl_flag) }}" alt="flag" /> <span>{{ active_lang() == 'pl' ? ThemeSetting()->pl_name : ThemeSetting()->sl_name }}</span>
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
                                                <a href="javascript:void(0);"><img class="icon" src="{{ asset('front/images/line-bar.png') }}" alt="line bar" /> {{ active_lang() == 'pl' ? translate()->pl_two :  translate()->sl_two}}</a>
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
                                                @foreach (MainMenu() as $mainMenu)
                                                @foreach (Categories() as $menuCat)
                                                    @if ($menuCat->id != $mainMenu->category_id)
                                                        @continue
                                                    @endif

                                                    <li class="has-mega-menu">
                                                        <a href="{{ route('front.category', $menuCat[active_lang().'_slug']) }}">{{ $menuCat[active_lang() . '_name'] }} @if($menuCat->subCategory->count() > 0) <i class="fas fa-angle-down"></i> @endif </a>
                                                        @if ($menuCat->subCategory->count() > 0)
                                                        <div class="mega-menu">
                                                            <div class="menu-left">
                                                                <ul class="nav nav-tabs" id="megamenutab" role="tablist">
                                                                    @foreach ($menuCat->subCategory as $mega_category)
                                                                    @if (subCatNews($mega_category->id)->count() == 0 )
                                                                        @continue
                                                                    @endif
                                                                    <li class="nav-item" role="presentation">
                                                                      <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="megaNews{{ $mega_category->id }}-tab" data-toggle="tab" href="#megaNews{{ $mega_category->id }}" role="tab" aria-controls="megaNews{{ $mega_category->id }}" aria-selected="false">{{ active_lang() == 'pl' ? $mega_category->pl_name : $mega_category->sl_name }}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <div class="menu-right">
                                                                <div class="tab-content" id="megamenutabContent">
                                                                    @foreach ($menuCat->subCategory as $mega_category)
                                                                    <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="megaNews{{ $mega_category->id }}" role="tabpanel" aria-labelledby="megaNews{{ $mega_category->id }}-tab">
                                                                        <div class="row">
                                                                            @foreach (subCatNews($mega_category->id) as $megamenu_news)
                                                                            @if($loop->iteration > 3) @continue @endif
                                                                            <div class="col-lg-4 col-md-6">
                                                                                <div class="single-grid-post">
                                                                                    <div class="post-thumbnail">
                                                                                        <a href="{{ route('single.news', $megamenu_news->pl_slug) }}"><img src="{{ asset($megamenu_news->image->image_three) }}" alt="post" /></a>
                                                                                    </div>
                                                                                    @if (active_lang() == 'pl')
                                                                                    <div class="post-info">
                                                                                        <a href="{{ route('front.category', $megamenu_news->category->pl_slug) }}" class="catagory">{{ $megamenu_news->category->pl_name }}</a>
                                                                                        <h3 class="post-title"><a href="{{ route('single.news', $megamenu_news->pl_slug) }}">{{ Str::substr($megamenu_news->pl_headline, 0, 30) }}..</a></h3>
                                                                                        <ul class="post-meta">
                                                                                            <li><i class="far fa-clock"></i> {{ $megamenu_news->created_at->format('M d, Y') }}</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    @else
                                                                                    <div class="post-info">
                                                                                        <a href="{{ route('front.category', $megamenu_news->category->sl_slug) }}" class="catagory">{{ $megamenu_news->category->sl_name }}</a>
                                                                                        <h3 class="post-title"><a href="{{ route('single.news', $megamenu_news->sl_slug) }}">{{ Str::substr($megamenu_news->sl_headline, 0, 30) }}..</a></h3>
                                                                                        <ul class="post-meta">
                                                                                            <li><i class="far fa-clock"></i> {{ $megamenu_news->created_at->format('M d, Y') }}</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </li>
                                                @endforeach
                                                @endforeach
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Pages
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                      <a class="dropdown-item" href="{{ url('/contact') }}">Contact Us</a>
                                                      <a class="dropdown-item" href="{{ url('/privacy-policy') }}">Privacy & Policy</a>
                                                      <a class="dropdown-item" href="{{ url('/request-add') }}">Request For Add</a>
                                                      <a class="dropdown-item" href="{{ url('/cookies') }}">Cookies</a>
                                                      <a class="dropdown-item" href="{{ url('/faq') }}">Faq</a>
                                                    </div>
                                                </li>

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
                                        <li><a target="_blank" href="{{ $social_small->social_link }}"><i class="{{ $social_small->icon_class }}"></i></a></li>
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
        {{-- <aside class="sidebar-area">
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
        </aside> --}}
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
                                <a href="{{ url('/') }}"><img src="{{ asset(ThemeSetting()->footer_logo) }}" alt="{{ ThemeSetting()->theme_name }}" /></a>
                            </div>
                        </div>
                        <div class="col-sm-9 text-sm-right">
                            <ul class="social-media">
                                @foreach (SocialMedia() as $footer_menu_item)
                                @if ($loop->iteration > 4)
                                    @continue
                                @endif
                                <li><a target="_blank" href="{{ url($footer_menu_item->social_link) }}">{{ $footer_menu_item->social_name }}</a></li>
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
                                        <a href="{{ route('single.news', $nost_view_news->pl_slug) }}">{{ Str::words($nost_view_news->pl_headline,5) }}</a>
                                    </li>
                                    @endforeach
                                    @endforeach
                                    @else
                                    @foreach (MostRecentPost(Footer()->wizard_one_count) as $most_recent_footer)
                                    <li>
                                        <span class="date">{{ \Carbon\Carbon::parse($most_recent_footer->created_at)->format('M d, Y') }}</span>
                                        <a href="{{ route('single.news', $most_recent_footer->pl_slug) }}">{{ Str::words($most_recent_footer->pl_headline,5) }}</a>
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
                                    @foreach (Categories() as $FooterCat)
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
                                <a href="{{ url('/') }}"><img src="{{ asset(ThemeSetting()->footer_logo) }}" alt="{{ ThemeSetting()->theme_name }}" /></a>
                            </div>
                        </div>
                        <div class="col-sm-9 text-sm-right">
                            <ul class="social-media">
                                @foreach (SocialMedia() as $footer_menu_item)
                                @if ($loop->iteration > 4)
                                    @continue
                                @endif
                                <li><a target="_blank" href="{{ url($footer_menu_item->social_link) }}">{{ $footer_menu_item->social_name }}</a></li>
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
                                        <a href="{{ route('single.news', $nost_view_news->sl_slug) }}">{{ Str::words($nost_view_news->sl_headline,5) }}</a>
                                    </li>
                                    @endforeach
                                    @endforeach
                                    @else
                                    @foreach (MostRecentPost(Footer()->wizard_one_count) as $most_recent_footer)
                                    <li>
                                        <span class="date">{{ \Carbon\Carbon::parse($most_recent_footer->created_at)->format('M d, Y') }}</span>
                                        <a href="{{ route('single.news', $most_recent_footer->sl_slug) }}">{{ Str::words($most_recent_footer->sl_headline,5) }}</a>
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
                                    @foreach (Categories() as $FooterCat)
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
        @if(Route::is('front.request.add', 'single.news', 'front.contact', 'front.index'))
        <script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}" type="text/javascript"></script>
        @endif
        <script src="{{ asset('front/js/main.js') }}"></script>
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
