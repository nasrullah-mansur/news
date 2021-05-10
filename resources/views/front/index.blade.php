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
                        <div class="hero-slider1">
                        @foreach ($top_news as $topNewsBig)
                        @if ($loop->iteration <= 3)
                        @if ($topNewsBig->news)
                        <div class="hero-post">
                            <div class="post-thumbnial">
                                <a href="{{ route('single.news', $topNewsBig->news[active_lang().'_slug']) }}">
                                    <img src="{{ asset($topNewsBig->news->image->image_two) }}" alt="{{ $topNewsBig->news->image->image_alt }}" />
                                </a>
                            </div>
                            <div class="post-info">
                                <a class="post-catagory" href="{{ route('front.category', $topNewsBig->news->category[active_lang().'_slug']) }}">{{ $topNewsBig->news->category[active_lang().'_name'] }}</a>
                                <h2 class="post-title"><a href="{{ route('single.news', $topNewsBig->news[active_lang().'_slug']) }}">{{ Str::substr($topNewsBig->news[active_lang().'_headline'], 0, 40) }}..</a></h2>
                                <p class="text-white">{!! Str::words($topNewsBig->news[active_lang().'_description'], 34) !!}</p>
                                <a class="hero-post-btn" href="{{ route('single.news', $topNewsBig->news->pl_slug) }}">{{ translate()[active_lang().'_fourteen'] }}</a>
                            </div>
                        </div>
                        @endif
                        @endif
                        @endforeach
                    </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hero-slider2">
                            @foreach ($top_news as $topNewsSmall)
                            @if ($loop->iteration > 3)
                            @if ($topNewsBig->news)
                            <div class="hero-post hero-post-medium" style="height: calc(100% - 30px)">
                                <div class="post-thumbnial h-100">
                                    <a href="{{ route('single.news', $topNewsSmall->news[active_lang().'_slug']) }}">
                                        <img style="width: auto; height: 100%; max-width: unset;" src="{{ asset($topNewsSmall->news->image->image_two) }}" alt="{{ $topNewsSmall->news->image->image_alt }}" />
                                    </a>
                                </div>
                                <div class="post-info">
                                    <a class="post-catagory" href="{{ route('front.category', $topNewsSmall->news->category[active_lang().'_slug']) }}">{{ $topNewsSmall->news->category[active_lang().'_name'] }}</a>
                                    <h2 class="post-title"><a href="{{ route('single.news', $topNewsSmall->news[active_lang().'_slug']) }}">{{ Str::words($topNewsSmall->news[active_lang().'_headline'], 6) }}</a></h2>
                                    <p style="color: white;">{!! Str::words($topNewsSmall->news[active_lang().'_description'], 14) !!}</p>
                                    <a class="hero-post-btn" href="{{ route('single.news', $topNewsSmall->news->pl_slug) }}">{{ translate()[active_lang().'_fourteen'] }}</a>
                                </div>
                            </div>
                        @endif
                        @endif
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </section>

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
                            <a target="_blank" class="single-follower {{ $socaial_media->social_name }}-follower" href="{{ $socaial_media->social_link }}"> <i class="icon {{ $socaial_media->icon_class }}"></i> <span class="text">{{ $socaial_media->followers }} {{ translate()[active_lang(). '_forty'] }}</span></a>
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
                                            <a href="{{ route('single.news', $tranding_news_tab_list->pl_slug) }}"><img src="{{ asset($tranding_news_tab_list->image->image_three) }}" alt="post" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $tranding_news_tab_list->category->pl_slug) }}" class="catagory">{{ $tranding_news_tab_list->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $tranding_news_tab_list->pl_slug) }}">{{ substr($tranding_news_tab_list->pl_headline,0,40) }}..</a></h3>
                                            <p>{!! Str::words($tranding_news_tab_list->pl_description, 10) !!}</p>
                                            <ul class="post-meta">
                                                <li><span><i class="far fa-clock"></i> {{ $tranding_news_tab_list->created_at->format('M d, Y') }}</span></li>
                                                <li><span><i class="far fa-comment"></i> Comment {{ $tranding_news_tab_list->comment->count() }}</span></li>
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
                                            <a href="{{ route('single.news', $tranding_news_item->pl_slug) }}"><img src="{{ asset($tranding_news_item->image->image_three) }}" alt="{{ $tranding_news_item->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $tranding_news_item->category->pl_slug) }}" class="catagory">{{ $tranding_news_item->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $tranding_news_item->pl_slug) }}">{{ Str::substr($tranding_news_item->pl_headline, 0, 40) }}..</a></h3>
                                            <p>{!! Str::words($tranding_news_item->pl_description, 10) !!}</p>
                                            <ul class="post-meta">
                                                <li><span><i class="far fa-clock"></i> {{ $tranding_news_item->created_at->format('M d, Y') }}</span></li>
                                                <li><span><i class="far fa-comment"></i> Comment {{ $tranding_news_item->comment->count() }}</span></li>
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
                                            <a href="{{ route('single.news', $tranding_news_tab_list->sl_slug) }}"><img src="{{ asset($tranding_news_tab_list->image->image_three) }}" alt="post" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $tranding_news_tab_list->category->sl_slug) }}" class="catagory">{{ $tranding_news_tab_list->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $tranding_news_tab_list->sl_slug) }}">{{ Str::substr($tranding_news_tab_list->sl_headline, 0, 40) }}..</a></h3>
                                            <p>{!! Str::words($tranding_news_tab_list->sl_description, 10) !!}</p>
                                            <ul class="post-meta">
                                                <li><span><i class="far fa-clock"></i> {{ $tranding_news_tab_list->created_at->format('M d, Y') }}</span></li>
                                                <li><span><i class="far fa-comment"></i> Comment {{ $tranding_news_tab_list->comment->count() }}</span></li>
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
                                            <a href="{{ route('single.news', $tranding_news_item->sl_slug) }}"><img src="{{ asset($tranding_news_item->image->image_three) }}" alt="{{ $tranding_news_item->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $tranding_news_item->category->sl_slug) }}" class="catagory">{{ $tranding_news_item->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $tranding_news_item->sl_slug) }}">{{ Str::substr($tranding_news_item->sl_headline, 0, 40) }}..</a></h3>
                                            <p>{!! Str::words($tranding_news_item->sl_description, 10) !!}</p>
                                            <ul class="post-meta">
                                                <li><span><i class="far fa-clock"></i> {{ $tranding_news_item->created_at->format('M d, Y') }}</span></li>
                                                <li><span><i class="far fa-comment"></i> Comment {{ $tranding_news_item->comment->count() }}</span></li>
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
                                            <a href="{{ route('single.news', $worldNews->first()->pl_slug) }}"><img  src="{{ $worldNews->first()->image->image_three }}" alt="{{ $worldNews->first()->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $worldNews->first()->category->pl_slug) }}" class="catagory">{{ $worldNews->first()->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $worldNews->first()->pl_slug) }}">{{ Str::substr($worldNews->first()->pl_headline, 0, 85) }}..</a></h3>

                                            <ul class="post-meta">
                                                <li><span><i class="far fa-clock"></i> J{{ $worldNews->first()->created_at->format('M d, Y') }}</span></li>
                                                <li><span><i class="far fa-comment"></i> Comment {{ $worldNews->first()->comment->count() }}</span></li>
                                            </ul>
                                            <p class="post-content">
                                                {!! Str::substr($worldNews->first()->pl_description, 0, 120) !!} ..
                                            </p>
                                            <a class="read-btn" href="{{ route('single.news', $worldNews->first()->pl_slug) }}">{{ translate()->pl_fourteen }}<i class="fas fa-arrow-right"></i></a>
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
                                            <a href="{{ route('single.news', $wNews->pl_slug) }}"><img  src="{{ $wNews->image->image_four }}" alt="{{ $wNews->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $wNews->category->pl_slug) }}" class="catagory">{{ $wNews->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $wNews->pl_slug) }}">{{ Str::substr($wNews->pl_headline, 0, 35) }} .. </a></h3>
                                            <ul class="post-meta">
                                                <li><span style="font-size: 14px;"><i class="far fa-clock"></i> {{ $wNews->created_at->format('M d, Y') }}</span></li>
                                                <li><span style="font-size: 14px;"><i class="far fa-comment"></i> Comment {{ $wNews->comment->count() }}</span></li>
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
                                @foreach ($category->news->where('type_id', 2)->reverse() as $wNewsByCat)
                                @if ($loop->index > 0)
                                    @continue
                                @endif
                                <div class="col-xl-7 col-lg-6">
                                    <div class="single-grid-post">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('single.news', $wNewsByCat->pl_slug) }}"><img  src="{{ $wNewsByCat->image->image_three }}" alt="{{ $wNewsByCat->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $wNewsByCat->first()->category->pl_slug) }}" class="catagory">{{ $wNewsByCat->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $wNewsByCat->pl_slug) }}">{{ Str::substr($wNewsByCat->pl_headline, 0, 85) }} ..</a></h3>
                                            <ul class="post-meta">
                                                <li><span><i class="far fa-clock"></i> {{ $wNewsByCat->created_at->format('M d, Y') }}</span></li>
                                                <li><span><i class="far fa-comment"></i> Comment {{ $wNewsByCat->comment->count() }}</span></li>
                                            </ul>
                                            <p class="post-content">
                                                {!! Str::words($wNewsByCat->pl_description, 18) !!}
                                            </p>
                                            <a class="read-btn" href="{{ route('single.news', $wNewsByCat->pl_slug) }}">{{ translate()->pl_fourteen }}<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-xl-5 col-lg-6">
                                    @foreach ($category->news->where('type_id', 2) as $wNewsByCat)
                                    @if ($loop->first || $loop->iteration > 4)
                                        @continue
                                    @endif
                                    <div class="single-list-post ">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('single.news', $wNewsByCat->pl_slug) }}"><img  src="{{ $wNewsByCat->image->image_four }}" alt="{{ $wNewsByCat->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $wNewsByCat->category->pl_slug) }}" class="catagory">{{ $wNewsByCat->category->pl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $wNewsByCat->pl_slug) }}">{{ Str::substr($wNewsByCat->pl_headline, 0, 35) }} ..</a></h3>
                                            <ul class="post-meta">
                                                <li><span style="font-size: 12px;"><i class="far fa-clock"></i> {{ $wNewsByCat->created_at->format('M d, Y') }}</span></li>
                                                <li><span style="font-size: 12px;"><i class="far fa-comment"></i> Comment {{ $wNewsByCat->comment->count() }}</span></li>
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
                                            <a href="{{ route('single.news', $worldNews->first()->sl_slug) }}"><img  src="{{ $worldNews->first()->image->image_three }}" alt="{{ $worldNews->first()->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $worldNews->first()->category->sl_slug) }}" class="catagory">{{ $worldNews->first()->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $worldNews->first()->sl_slug) }}">{{ Str::substr($worldNews->first()->sl_headline, 0, 85) }} ..</a></h3>
                                            <ul class="post-meta">
                                                <li><span><i class="far fa-clock"></i> J{{ $worldNews->first()->created_at->format('M d, Y') }}</span></li>
                                                <li><span><i class="far fa-comment"></i> Comment {{ $worldNews->first()->comment->count() }}</span></li>
                                            </ul>
                                            <p class="post-content">
                                                {!! Str::words($worldNews->first()->sl_description, 18) !!}
                                            </p>
                                            <a class="read-btn" href="{{ route('single.news', $worldNews->first()->sl_slug) }}">{{ translate()->sl_fourteen }}<i class="fas fa-arrow-right"></i></a>
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
                                            <a href="{{ route('single.news', $wNews->sl_slug) }}"><img src="{{ $wNews->image->image_four }}" alt="{{ $wNews->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $wNews->category->sl_slug) }}" class="catagory">{{ $wNews->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $wNews->sl_slug) }}">{{ Str::substr($wNews->sl_headline, 0, 35) }} .. </a></h3>
                                            <ul class="post-meta">
                                                <li><span style="font-size: 12px;"><i class="far fa-clock"></i> {{ $wNews->created_at->format('M d, Y') }}</span></li>
                                                <li><span style="font-size: 12px;"><i class="far fa-comment"></i> Comment {{ $wNews->comment->count() }}</span></li>
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
                                            <a href="{{ route('single.news', $wNewsByCat->sl_slug) }}"><img  src="{{ $wNewsByCat->image->image_three }}" alt="{{ $wNewsByCat->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $wNewsByCat->first()->category->sl_slug) }}" class="catagory">{{ $wNewsByCat->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $wNewsByCat->sl_slug) }}">{{ $wNewsByCat->sl_headline }}</a></h3>
                                            <ul class="post-meta">
                                                <li><span><i class="far fa-clock"></i> {{ $wNewsByCat->created_at->format('M d, Y') }}</span></li>
                                                <li><span><i class="far fa-comment"></i> Comment {{ $wNewsByCat->comment->count() }}</span></li>
                                            </ul>
                                            <p class="post-content">
                                                {!! Str::words($wNewsByCat->sl_description, 18) !!}
                                            </p>
                                            <a class="read-btn" href="{{ route('single.news', $wNewsByCat->sl_slug) }}">{{ translate()->sl_fourteen }}<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-xl-5 col-lg-6">
                                    @foreach ($category->news->where('type_id', 2) as $wNewsByCat)
                                    @if ($loop->first || $loop->iteration > 4)
                                        @continue
                                    @endif
                                    <div class="single-list-post ">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('single.news', $wNewsByCat->sl_slug) }}"><img src="{{ $wNewsByCat->image->image_four }}" alt="{{ $wNewsByCat->image->image_alt }}" /></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('front.category', $wNewsByCat->category->sl_slug) }}" class="catagory">{{ $wNewsByCat->category->sl_name }}</a>
                                            <h3 class="post-title"><a href="{{ route('single.news', $wNewsByCat->sl_slug) }}">{{ Str::words($wNewsByCat->sl_headline, 6) }}..</a></h3>
                                            <ul class="post-meta">
                                                <li><span style="font-size: 12px;"><i class="far fa-clock"></i> {{ $wNewsByCat->created_at->format('M d, Y') }}</span></li>
                                                <li><span style="font-size: 12px;"><i class="far fa-comment"></i> Comment {{ $wNewsByCat->comment->count() }}</span></li>
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

                                <h2>{{ active_lang() == 'pl' ? $subscriber->pl_title : $subscriber->sl_title }}</h2>
                                <p>{{ active_lang() == 'pl' ? $subscriber->pl_text : $subscriber->sl_text }}</p>
                            </div>
                            <div class="newsletter-form">
                                <form action="{{ route('subscriber.store') }}" method="POST" class="form-inline">
                                    @csrf
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
                                    <a href="{{ route('single.news', $sportNewsItem->pl_slug) }}"><img src="{{ $loop->first ? asset($sportNewsItem->image->image_three) : asset($sportNewsItem->image->image_four) }}" alt="{{ $sportNewsItem->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $sportNewsItem->category->pl_slug) }}" class="catagory">{{ $sportNewsItem->category->pl_name }}</a>
                                    @if ($loop->first)
                                    <h3 class="post-title"><a href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ Str::substr($sportNewsItem->pl_headline, 0, 80) }}..</a></h3>
                                    @else
                                    <h3 class="post-title"><a href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ Str::substr($sportNewsItem->pl_headline, 0, 46) }}..</a></h3>
                                    @endif
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $sportNewsItem->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> Comment {{ $sportNewsItem->comment->count() }}</span></li>
                                    </ul>
                                    @if ($loop->first)
                                    <p class="post-content">
                                        {!! Str::substr($sportNewsItem->pl_description, 0, 96) !!}..
                                    </p>

                                    <a class="read-btn" href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ translate()->pl_fourteen }}<i class="fas fa-arrow-right"></i></a>
                                    @endif
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
                                    <a href="{{ route('single.news', $sportNewsItem->pl_slug) }}"><img src="{{ $loop->first ? asset($sportNewsItem->image->image_three) : asset($sportNewsItem->image->image_four) }}" alt="{{ $sportNewsItem->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $sportNewsItem->category->pl_slug) }}" class="catagory">{{ $sportNewsItem->category->pl_name }}</a>
                                    @if ($loop->first)
                                    <h3 class="post-title"><a href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ Str::substr($sportNewsItem->pl_headline, 0, 80) }}..</a></h3>
                                    @else
                                    <h3 class="post-title"><a href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ Str::substr($sportNewsItem->pl_headline, 0, 46) }}..</a></h3>
                                    @endif
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $sportNewsItem->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> Comment {{ $sportNewsItem->comment->count() }}</span></li>
                                    </ul>
                                    @if ($loop->first)
                                    <p class="post-content">
                                        {!! Str::substr($sportNewsItem->pl_description, 0, 96) !!}..
                                    </p>

                                    <a class="read-btn" href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ translate()->pl_fourteen }}<i class="fas fa-arrow-right"></i></a>
                                    @endif
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
                                    <a href="{{ route('single.news', $sportNewsItem->sl_slug) }}"><img src="{{ $loop->first ? asset($sportNewsItem->image->image_three) : asset($sportNewsItem->image->image_four) }}" alt="{{ $sportNewsItem->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $sportNewsItem->category->sl_slug) }}" class="catagory">{{ $sportNewsItem->category->sl_name }}</a>
                                    @if ($loop->first)
                                    <h3 class="post-title"><a href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ Str::substr($sportNewsItem->sl_headline,0, 80) }}..</a></h3>
                                    @else
                                    <h3 class="post-title"><a href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ Str::substr($sportNewsItem->sl_headline, 0, 46) }}..</a></h3>
                                    @endif
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $sportNewsItem->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> Comment {{ $sportNewsItem->comment->count() }}</span></li>
                                    </ul>
                                    @if ($loop->first)
                                    <p class="post-content">
                                        {!! Str::substr($sportNewsItem->sl_description, 0, 96) !!}..
                                    </p>

                                    <a class="read-btn" href="{{ route('single.news', $sportNewsItem->sl_slug) }}">{{ translate()->sl_fourteen }}<i class="fas fa-arrow-right"></i></a>
                                    @endif
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
                                    <a href="{{ route('single.news', $sportNewsItem->sl_slug) }}"><img src="{{ $loop->first ? asset($sportNewsItem->image->image_three) : asset($sportNewsItem->image->image_four) }}" alt="{{ $sportNewsItem->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $sportNewsItem->category->sl_slug) }}" class="catagory">{{ $sportNewsItem->category->sl_name }}</a>
                                    @if ($loop->first)
                                    <h3 class="post-title"><a href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ Str::substr($sportNewsItem->sl_headline, 0,80) }}..</a></h3>
                                    @else
                                    <h3 class="post-title"><a href="{{ route('single.news', $sportNewsItem->pl_slug) }}">{{ Str::substr($sportNewsItem->sl_headline, 0, 46) }}</a></h3>
                                    @endif
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $sportNewsItem->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> Comment {{ $sportNewsItem->comment->count() }}</span></li>
                                    </ul>
                                    @if ($loop->first)
                                    <p class="post-content">
                                        {!! Str::substr($sportNewsItem->sl_description, 0, 96) !!}..
                                    </p>

                                    <a class="read-btn" href="{{ route('single.news', $sportNewsItem->sl_slug) }}">{{ translate()->sl_fourteen }}<i class="fas fa-arrow-right"></i></a>
                                    @endif
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
                            @foreach (indexOneAdd() as $indexOneAdd)
                            <a href="{{ $indexOneAdd->url }}" target="_blank">
                                <img src="{{ asset($indexOneAdd->image) }}" alt="{{ $indexOneAdd->url }}" />
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="single-add">
                            @foreach (indexTwoAdd() as $indexOneAdd)
                            <a href="{{ $indexOneAdd->url }}" target="_blank">
                                <img src="{{ asset($indexOneAdd->image) }}" alt="{{ $indexOneAdd->url }}" />
                            </a>
                            @endforeach
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
                                    <a href="{{ route('single.news', $VideoNewsItem->pl_slug) }}"><img src="{{ asset($VideoNewsItem->image->image_three) }}" alt="{{ $VideoNewsItem->image->image_alt }}" /></a>
                                    <a class="video-btn" href="{{ route('single.news', $VideoNewsItem->pl_slug) }}"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $VideoNewsItem->category->pl_slug) }}" class="catagory">{{ $VideoNewsItem->category->pl_name }}</a>
                                    <h3 class="post-title"><a href="{{ route('single.news', $VideoNewsItem->pl_slug) }}">{{ Str::substr($VideoNewsItem->pl_headline,0, 46) }}..</a></h3>
                                    <p>{!! Str::substr($VideoNewsItem->pl_description, 0, 60) !!}..</p>

                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $VideoNewsItem->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> Comment 123</span></li>
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
                                    <a href="{{ route('single.news', $VideoNewsItem->sl_slug) }}"><img src="{{ asset($VideoNewsItem->image->image_three) }}" alt="{{ $VideoNewsItem->image->image_alt }}" /></a>
                                    <a class="video-btn" href="{{ route('single.news', $VideoNewsItem->sl_slug) }}"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $VideoNewsItem->category->sl_slug) }}" class="catagory">{{ $VideoNewsItem->category->sl_name }}</a>
                                    <h3 class="post-title"><a href="{{ route('single.news', $VideoNewsItem->sl_slug) }}">{{ Str::substr($VideoNewsItem->sl_headline,0, 46) }}..</a></h3>
                                    <p>{!! Str::substr($VideoNewsItem->sl_description, 0, 60) !!}..</p>
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $VideoNewsItem->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> Comment 123</span></li>
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

@section('custom_js')
@if(ThemeSetting()->layout == 'rtl')
<script>
    $('.breaking-news-slide').slick({
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      dots: false,
      arrows: false,
      prevArrow: '<i class="slick-prev arrow fas fa-angle-left"></i> ',
      nextArrow: '<i class="slick-next arrow fas fa-angle-right"></i> ',
      vertical: true,
    });


    $('.hero-slider1').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        prevArrow: '<i class="slick-prev arrow fas fa-angle-left"></i> ',
        nextArrow: '<i class="slick-next arrow fas fa-angle-right"></i> ',
        rtl: true,
    });

    $('.hero-slider2').slick({
        infinite: true,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        prevArrow: '<i class="slick-prev arrow fas fa-angle-left"></i> ',
        nextArrow: '<i class="slick-next arrow fas fa-angle-right"></i> ',
        rtl: true,
    });
</script>
@else
<script>
    $('.breaking-news-slide').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        prevArrow: '<i class="slick-prev arrow fas fa-angle-left"></i> ',
        nextArrow: '<i class="slick-next arrow fas fa-angle-right"></i> ',
        vertical: true,
    });

    $('.hero-slider1').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        prevArrow: '<i class="slick-prev arrow fas fa-angle-left"></i> ',
        nextArrow: '<i class="slick-next arrow fas fa-angle-right"></i> ',
        fade: true,
    });

    $('.hero-slider2').slick({
        infinite: true,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        prevArrow: '<i class="slick-prev arrow fas fa-angle-left"></i> ',
        nextArrow: '<i class="slick-next arrow fas fa-angle-right"></i> ',
        fade: true,
    });
</script>
@endif

@endsection
