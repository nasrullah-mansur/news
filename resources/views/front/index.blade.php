@extends('layouts.front')

@section('breaking_news')
@if (Route::is('front.index'))
<div class="topbar-area">
    <div class="container">
        <div class="header-top-wrap">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="breaking-news-area">
                        <div class="breaking-news-label">{{ active_lang() == 'pl' ? translate()->pl_one :  translate()->sl_one}}</div>
                        <div class="breaking-news-slide">
                            @foreach ($breakingNews as $breaking_news_item)
                            <div class="sigle-news">
                                <a class="news-title" href="{{ $breaking_news_item->url }}">{{ active_lang() == 'pl' ? $breaking_news_item->pl_breaking_news : $breaking_news_item->sl_breaking_news }}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-md-right">
                    <span class="today-date"><i class="far fa-clock"></i> {{ date('M, d, Y l') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@section('content')
        <!-- hero-section start here  -->
        <section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="hero-post">
                            <div class="post-thumbnial">
                                <a href="single-blog.html">
                                    <img src="{{ asset('front/images/hero-post-1.png') }}" alt="hero-post" />
                                </a>
                            </div>
                            <div class="post-info">
                                <a class="post-catagory" href="single-blog.html">Top News</a>
                                <h2 class="post-title"><a href="single-blog.html">Tanzania's president dies aged 61 after Covid. </a></h2>
                                <p class="post-content">UK vaccine supply hit by India delivery delay</p>
                                <a class="hero-post-btn" href="single-blog.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hero-post hero-post-medium">
                            <div class="post-thumbnial">
                                <a href="single-blog.html">
                                    <img src="{{ asset('front/images/hero-post-2.png') }}" alt="hero-post" />
                                </a>
                            </div>
                            <div class="post-info">
                                <a class="post-catagory" href="single-blog.html">Goolge Heath</a>
                                <h2 class="post-title"><a href="single-blog.html">Help for Your Home. All in one </a></h2>
                                <p class="post-content">UK vaccine supply hit by India </p>
                                <a class="hero-post-btn btn-outline" href="single-blog.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-section end here  -->

        <!-- Follow Us area start here  -->
        <section class="follow-area section-top pb-90">
            <div class="container">
                <div class="section-header">
                    <div class="row aling-items-center">
                        <div class="col-sm-5">
                            <h2 class="section-title">
                                @if(active_lang() == 'pl')
                                {!! HeadingStyle(translate()->pl_three) !!}
                                @else
                                {!! HeadingStyle(translate()->sl_three) !!}
                                @endif
                            </h2>
                        </div>
                        <div class="col-sm-7 text-sm-right">
                            <p class="followers-count mb-0"><i class="icon fas fa-heart"></i>
                                @if(active_lang() == 'pl')
                                {!! HeadingStyle(translate()->pl_four) !!}
                                @else
                                {!! HeadingStyle(translate()->sl_four) !!}
                                @endif</p>
                        </div>
                    </div>
                </div>
                <div class="followers-list">
                    <div class="row">
                        @foreach (SocialMedia() as $socaial_media)
                        <div class="col-lg-3 col-md-4 col-sm-6 ">
                            <a class="single-follower {{ $socaial_media->social_name }}-follower" href="{{ $socaial_media->social_link }}"> <i class="icon {{ $socaial_media->icon_class }}"></i> <span class="text">{{ $socaial_media->followers }} Follower</span></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Follow Us area end here  -->

        <!-- Trending News area start here  -->
        @if($trendingNews->count() > 0)
        @if(active_lang() == 'pl')
        <section class="trending-news-area pb-90">
            <div class="container">
                <div class="section-header">
                    <div class="row aling-items-center">
                        <div class="col-md-5">
                            <h2 class="section-title">
                                {!! HeadingStyle(translate()->pl_six) !!}
                            </h2>
                        </div>
                        <div class="col-md-7 text-md-right">
                            <div class="tab-menu">
                                <ul class="nav nav-tabs" id="TrendingTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="all-news-tab" data-toggle="tab" href="#all-news" role="tab" aria-controls="all-news" aria-selected="true">

                                            {!! HeadingStyle(translate()->pl_five) !!}

                                        </a>
                                      </li>
                                    @foreach ($categories as $tranding_news_tab_menu)
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link" id="{{ $tranding_news_tab_menu->pl_slug . '-tab' }}" data-toggle="tab" href="#{{ $tranding_news_tab_menu->pl_slug }}" role="tab" aria-controls="{{ $tranding_news_tab_menu->pl_slug . '-tab' }}" aria-selected="true">{{ $tranding_news_tab_menu->pl_name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="TrendingTabContent">
                    <div class="tab-pane fade show active" id="all-news" role="tabpanel" aria-labelledby="all-news-tab">
                        <div class="post-list">
                            <div class="row">
                                @foreach($trendingNews as $tranding_news_tab_list)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ asset($tranding_news_tab_list->image->image_three) }}" alt="post" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $tranding_news_tab_list->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $tranding_news_tab_list->pl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $tranding_news_tab_list->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                    <div class="tab-pane fade" id="{{ $category->pl_slug }}" role="tabpanel" aria-labelledby="all-news-tab">
                        <div class="post-list">
                            <div class="row">
                                @foreach($category->news()->where('type_id', 1)->limit(newsCount()->trending_news_count)->get()->reverse() as $tranding_news_item)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ asset($tranding_news_item->image->image_three) }}" alt="{{ $tranding_news_item->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $tranding_news_item->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $tranding_news_item->pl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $tranding_news_item->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @else
        <section class="trending-news-area pb-90">
            <div class="container">
                <div class="section-header">
                    <div class="row aling-items-center">
                        <div class="col-md-5">
                            <h2 class="section-title">{!! HeadingStyle(translate()->sl_six) !!}</h2>
                        </div>
                        <div class="col-md-7 text-md-right">
                            <div class="tab-menu">
                                <ul class="nav nav-tabs" id="TrendingTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="all-news-tab" data-toggle="tab" href="#all-news" role="tab" aria-controls="all-news" aria-selected="true">{!! HeadingStyle(translate()->sl_five) !!}</a>
                                      </li>
                                    @foreach ($categories as $tranding_news_tab_menu)
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link" id="{{ $tranding_news_tab_menu->pl_slug . '-tab' }}" data-toggle="tab" href="#{{ $tranding_news_tab_menu->pl_slug }}" role="tab" aria-controls="{{ $tranding_news_tab_menu->pl_slug . '-tab' }}" aria-selected="true">{{ $tranding_news_tab_menu->sl_name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="TrendingTabContent">
                    <div class="tab-pane fade show active" id="all-news" role="tabpanel" aria-labelledby="all-news-tab">
                        <div class="post-list">
                            <div class="row">
                                @foreach($trendingNews as $tranding_news_tab_list)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ asset($tranding_news_tab_list->image->image_three) }}" alt="post" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $tranding_news_tab_list->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $tranding_news_tab_list->sl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $tranding_news_tab_list->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                    <div class="tab-pane fade" id="{{ $category->pl_slug }}" role="tabpanel" aria-labelledby="all-news-tab">
                        <div class="post-list">
                            <div class="row">
                                @foreach($category->news()->where('type_id', 1)->limit(newsCount()->trending_news_count)->get()->reverse() as $tranding_news_item)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ asset($tranding_news_item->image->image_three) }}" alt="{{ $tranding_news_item->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $tranding_news_item->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $tranding_news_item->sl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $tranding_news_item->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        @endif
        <!-- Trending News area end here  -->

        <!-- World News area start here  -->
        @if($worldNews->count() > 0)
        @if(active_lang() == 'pl')
        <section class="world-news-area section-top pb-90 section-bg-1">
            <div class="container">
                <div class="section-header">
                    <div class="row aling-items-center">
                        <div class="col-md-5">
                            <h2 class="section-title">{!! HeadingStyle(translate()->pl_seven) !!}</h2>
                        </div>
                        <div class="col-md-7 text-md-right">
                            <div class="tab-menu">
                                <ul class="nav nav-tabs" id="WorldTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="wall-news-tab" data-toggle="tab" href="#wall-news" role="tab" aria-controls="wall-news" aria-selected="true">{!! HeadingStyle(translate()->pl_five) !!}</a>
                                    </li>
                                    @foreach ($categories as $category)
                                    <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="w-{{ $category->pl_slug }}-tab" data-toggle="tab" href="#w-{{ $category->pl_slug }}" role="tab" aria-controls="w-{{ $category->pl_slug }}" aria-selected="false">{{ $category->pl_name }}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="WorldTabContent">
                    <div class="tab-pane fade show active" id="wall-news" role="tabpanel" aria-labelledby="wall-news-tab">
                        <div class="post-list">
                            <div class="row">

                                <div class="col-xl-7 col-lg-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ $worldNews->first()->image->image_three }}" alt="{{ $worldNews->first()->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $worldNews->first()->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $worldNews->first()->pl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> J{{ $worldNews->first()->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                            <p class="post-content">
                                                {{ substr($worldNews->first()->pl_details, 0, 200) }}
                                            </p>
                                            <a class="read-btn" href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-5 col-lg-6">
                                    @foreach ($worldNews as $wNews)
                                    @if ($loop->first)
                                        @continue
                                    @endif
                                    <div class="single-list-post ">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ $wNews->image->image_four }}" alt="{{ $wNews->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $wNews->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $wNews->pl_headline }} </a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $wNews->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                    <div class="tab-pane fade" id="w-{{ $category->pl_slug }}" role="tabpanel" aria-labelledby="w-{{ $category->pl_slug }}-tab">
                        <div class="post-list">
                            <div class="row">
                                @foreach ($category->news->where('type_id', 2) as $wNewsByCat)
                                @if ($loop->index > 0)
                                    @continue
                                @endif
                                <div class="col-xl-7 col-lg-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ $wNewsByCat->image->image_three }}" alt="{{ $wNewsByCat->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $wNewsByCat->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $wNewsByCat->pl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $wNewsByCat->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                            <p class="post-content">
                                                {{ substr($wNewsByCat->pl_details, 0, 200) }}
                                            </p>
                                            <a class="read-btn" href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-xl-5 col-lg-6">
                                    @foreach ($category->news->where('type_id', 2) as $wNewsByCat)
                                    @if ($loop->first)
                                        @continue
                                    @endif
                                    <div class="single-list-post ">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ $wNewsByCat->image->image_four }}" alt="{{ $wNewsByCat->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $wNewsByCat->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $wNewsByCat->pl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $wNewsByCat->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @else
        <section class="world-news-area section-top pb-90 section-bg-1">
            <div class="container">
                <div class="section-header">
                    <div class="row aling-items-center">
                        <div class="col-md-5">
                            <h2 class="section-title">{!! HeadingStyle(translate()->sl_seven) !!}</h2>
                        </div>
                        <div class="col-md-7 text-md-right">
                            <div class="tab-menu">
                                <ul class="nav nav-tabs" id="WorldTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="wall-news-tab" data-toggle="tab" href="#wall-news" role="tab" aria-controls="wall-news" aria-selected="true">{!! HeadingStyle(translate()->sl_five) !!}</a>
                                    </li>
                                    @foreach ($categories as $category)
                                    <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="w-{{ $category->pl_slug }}-tab" data-toggle="tab" href="#w-{{ $category->pl_slug }}" role="tab" aria-controls="w-{{ $category->pl_slug }}" aria-selected="false">{{ $category->sl_name }}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="WorldTabContent">
                    <div class="tab-pane fade show active" id="wall-news" role="tabpanel" aria-labelledby="wall-news-tab">
                        <div class="post-list">
                            <div class="row">

                                <div class="col-xl-7 col-lg-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ $worldNews->first()->image->image_three }}" alt="{{ $worldNews->first()->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $worldNews->first()->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $worldNews->first()->sl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> J{{ $worldNews->first()->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                            <p class="post-content">
                                                {{ substr($worldNews->first()->sl_details, 0, 200) }}
                                            </p>
                                            <a class="read-btn" href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-5 col-lg-6">
                                    @foreach ($worldNews as $wNews)
                                    @if ($loop->first)
                                        @continue
                                    @endif
                                    <div class="single-list-post ">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ $wNews->image->image_four }}" alt="{{ $wNews->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $wNews->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $wNews->sl_headline }} </a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $wNews->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                    <div class="tab-pane fade" id="w-{{ $category->pl_slug }}" role="tabpanel" aria-labelledby="w-{{ $category->pl_slug }}-tab">
                        <div class="post-list">
                            <div class="row">
                                @foreach ($category->news->where('type_id', 2) as $wNewsByCat)
                                @if ($loop->index > 0)
                                    @continue
                                @endif
                                <div class="col-xl-7 col-lg-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ $wNewsByCat->image->image_three }}" alt="{{ $wNewsByCat->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $wNewsByCat->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $wNewsByCat->sl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $wNewsByCat->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                            <p class="post-content">
                                                {{ substr($wNewsByCat->sl_details, 0, 200) }}
                                            </p>
                                            <a class="read-btn" href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-xl-5 col-lg-6">
                                    @foreach ($category->news->where('type_id', 2) as $wNewsByCat)
                                    @if ($loop->first)
                                        @continue
                                    @endif
                                    <div class="single-list-post ">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html"><img src="{{ $wNewsByCat->image->image_four }}" alt="{{ $wNewsByCat->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="single-blog.html" class="catagory">{{ $wNewsByCat->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="single-blog.html">{{ $wNewsByCat->sl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><a href="#"><i class="far fa-clock"></i> {{ $wNewsByCat->created_at->format('M d, Y') }}</a></li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        @endif
        <!-- World News area end here  -->

        <!-- Newsletter area start here  -->
        <section class="newsletter-area section">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="newsletter-text">
                                <h2>Wellcome Our Newsletter</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="newsletter-form">
                                <form action="#" class="form-inline">
                                    <div class="form-group mr-md-4">
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Entar your email" />
                                    </div>
                                    <button type="submit" class="subscribe-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="newsletter-image">
                                <img src="{{ asset('front/images/newsletter-image.png') }}" alt="newsletter" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter area end here  -->

        <!-- catagroy News area start here  -->
        @if(active_lang() == 'pl')
        <section class="catagroy-news-area section-top pb-90 section-bg-1">
            <div class="container">
                <div class="post-list">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-header">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="section-title">{!! HeadingStyle(translate()->pl_eight) !!}</h2>
                                    </div>
                                </div>
                            </div>
                            @foreach ($SportNews as $sportNewsItem)
                            <div class="{{ $loop->first ? 'single-grid-post' : 'single-list-post' }}">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html"><img src="{{ $loop->first ? asset($sportNewsItem->image->image_three) : asset($sportNewsItem->image->image_four) }}" alt="{{ $sportNewsItem->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="single-blog.html" class="catagory">{{ $sportNewsItem->category->pl_name }}</a>
                                    <h3 class="post-title"><a href="single-blog.html">{{ $sportNewsItem->pl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-clock"></i> {{ $sportNewsItem->created_at->format('M d, Y') }}</a></li>
                                        <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                    </ul>
                                    @if ($loop->first)
                                    <p class="post-content">
                                        {{ substr($sportNewsItem->pl_details, 0, 200) }}
                                    </p>

                                    @endif
                                    <a class="read-btn" href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <div class="section-header">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="section-title">{!! HeadingStyle(translate()->pl_nine) !!}</span></h2>
                                    </div>
                                </div>
                            </div>
                            @foreach ($EntertainmentNews as $sportNewsItem)
                            <div class="{{ $loop->first ? 'single-grid-post' : 'single-list-post' }}">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html"><img src="{{ $loop->first ? asset($sportNewsItem->image->image_three) : asset($sportNewsItem->image->image_four) }}" alt="{{ $sportNewsItem->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="single-blog.html" class="catagory">{{ $sportNewsItem->category->pl_name }}</a>
                                    <h3 class="post-title"><a href="single-blog.html">{{ $sportNewsItem->pl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-clock"></i> {{ $sportNewsItem->created_at->format('M d, Y') }}</a></li>
                                        <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                    </ul>
                                    @if ($loop->first)
                                    <p class="post-content">
                                        {{ substr($sportNewsItem->pl_details, 0, 200) }}
                                    </p>

                                    @endif
                                    <a class="read-btn" href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @else
        <section class="catagroy-news-area section-top pb-90 section-bg-1">
            <div class="container">
                <div class="post-list">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-header">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="section-title">{!! HeadingStyle(translate()->sl_eight) !!}</h2>
                                    </div>
                                </div>
                            </div>
                            @foreach ($SportNews as $sportNewsItem)
                            <div class="{{ $loop->first ? 'single-grid-post' : 'single-list-post' }}">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html"><img src="{{ $loop->first ? asset($sportNewsItem->image->image_three) : asset($sportNewsItem->image->image_four) }}" alt="{{ $sportNewsItem->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="single-blog.html" class="catagory">{{ $sportNewsItem->category->sl_name }}</a>
                                    <h3 class="post-title"><a href="single-blog.html">{{ $sportNewsItem->sl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-clock"></i> {{ $sportNewsItem->created_at->format('M d, Y') }}</a></li>
                                        <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                    </ul>
                                    @if ($loop->first)
                                    <p class="post-content">
                                        {{ substr($sportNewsItem->sl_details, 0, 200) }}
                                    </p>

                                    @endif
                                    <a class="read-btn" href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <div class="section-header">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h2 class="section-title">{!! HeadingStyle(translate()->sl_nine) !!}</h2>
                                    </div>
                                </div>
                            </div>
                            @foreach ($EntertainmentNews as $sportNewsItem)
                            <div class="{{ $loop->first ? 'single-grid-post' : 'single-list-post' }}">
                                <div class="post-thumbnail">
                                    <a href="single-blog.html"><img src="{{ $loop->first ? asset($sportNewsItem->image->image_three) : asset($sportNewsItem->image->image_four) }}" alt="{{ $sportNewsItem->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="single-blog.html" class="catagory">{{ $sportNewsItem->category->sl_name }}</a>
                                    <h3 class="post-title"><a href="single-blog.html">{{ $sportNewsItem->sl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-clock"></i> {{ $sportNewsItem->created_at->format('M d, Y') }}</a></li>
                                        <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                    </ul>
                                    @if ($loop->first)
                                    <p class="post-content">
                                        {{ substr($sportNewsItem->sl_details, 0, 200) }}
                                    </p>

                                    @endif
                                    <a class="read-btn" href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- catagroy News area end here  -->

        <!-- add area start here  -->
        <div class="add-area section-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="single-add big-add">
                            <a href="#">
                                <img src="{{ asset('front/images/add-one.png') }}" alt="add" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="single-add">
                            <a href="#">
                                <img src="{{ asset('front/images/add-two.png') }}" alt="add" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- add area end here  -->

        <!-- Video News area start here  -->
        @if(active_lang() == 'pl')
        <section class="video-news-area section-top pb-90 section-bg-1">
            <div class="container">
                <div class="section-header">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">{!! HeadingStyle(translate()->pl_ten) !!}</h2>
                        </div>
                    </div>
                </div>
                <div class="post-list">
                    <div class="row">
                        @foreach ($VideoNews as $VideoNewsItem)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-video-post">
                                <div class="post-thumbnail">
                                    <a href="single-blog-video.html"><img src="{{ asset($VideoNewsItem->image->image_four) }}" alt="{{ $VideoNewsItem->image->image_alt }}" /></a>
                                    <a class="video-btn" href="single-blog-video.html"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="post-info">
                                    <a href="single-blog-video.html" class="catagory">{{ $VideoNewsItem->category->pl_name }}</a>
                                    <h3 class="post-title"><a href="single-blog-video.html">{{ $VideoNewsItem->pl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-clock"></i> {{ $VideoNewsItem->created_at->format('M d, Y') }}</a></li>
                                        <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @else
        <section class="video-news-area section-top pb-90 section-bg-1">
            <div class="container">
                <div class="section-header">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">{!! HeadingStyle(translate()->sl_ten) !!}</h2>
                        </div>
                    </div>
                </div>
                <div class="post-list">
                    <div class="row">
                        @foreach ($VideoNews as $VideoNewsItem)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-video-post">
                                <div class="post-thumbnail">
                                    <a href="single-blog-video.html"><img src="{{ asset($VideoNewsItem->image->image_four) }}" alt="{{ $VideoNewsItem->image->image_alt }}" /></a>
                                    <a class="video-btn" href="single-blog-video.html"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="post-info">
                                    <a href="single-blog-video.html" class="catagory">{{ $VideoNewsItem->category->sl_name }}</a>
                                    <h3 class="post-title"><a href="single-blog-video.html">{{ $VideoNewsItem->sl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-clock"></i> {{ $VideoNewsItem->created_at->format('M d, Y') }}</a></li>
                                        <li><a href="#"><i class="far fa-comment"></i> Comment 123</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- Video News area end here  -->
@endsection
