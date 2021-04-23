@extends('layouts.front')

@section('content')
<!-- breadcrumb area start here  -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">{{ active_lang() == 'pl' ? translate()->pl_twenty_four : translate()->sl_twenty_four }}</h2>
                    <ul class="breadcrumb-page ">
                        <li><a href="index.html">Home</a></li>
                        <li>Bussiness</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end here  -->
<!--categories page area start here  -->
<section class="categories-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-header">
                    <div class="row aling-items-center">
                        <div class="col-md-5">
                            <h2 class="section-title">{{ active_lang() == 'pl' ? $cat->pl_name : $cat->sl_name  }}</h2>
                        </div>
                    </div>
                </div>
                <div class="post-list">
                    <div class="row">
                        @if (active_lang() == 'pl')
                        @foreach ($allNewsByCat as $slingle_news)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-grid-post">
                                <div class="post-thumbnail">
                                    <a href="{{ route('single.news', $slingle_news->pl_slug) }}"><img src="{{ asset($slingle_news->image->image_three) }}" alt="{{ $slingle_news->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $slingle_news->category->pl_slug) }}" class="catagory">{{ $slingle_news->category->pl_name }}</a>
                                    <h3 class="post-title"><a href="{{ route('single.news', $slingle_news->pl_slug) }}">{{ $slingle_news->pl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $slingle_news->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> Comment {{ $slingle_news->comment->count() }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        @foreach ($allNewsByCat as $slingle_news)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-grid-post">
                                <div class="post-thumbnail">
                                    <a href="{{ route('single.news', $slingle_news->pl_slug) }}"><img src="{{ asset($slingle_news->image->image_three) }}" alt="{{ $slingle_news->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $slingle_news->category->sl_slug) }}" class="catagory">{{ $slingle_news->category->sl_name }}</a>
                                    <h3 class="post-title"><a href="{{ route('single.news', $slingle_news->sl_slug) }}">{{ $slingle_news->sl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $slingle_news->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> Comment {{ $slingle_news->comment->count() }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="pagination-area">
                    <div class="row align-items-center">

                        <div class="col-md-6">
                            <nav class="page-nav">
                                {{ $allNewsByCat->onEachSide(5)->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-widget">
                    <div class="widget widget_connected">
                        <h3 class="widget-title">{!! HeadingStyle(translate()->pl_twenty_six) !!}</h3>
                        <ul>
                            @foreach (SocialMedia() as $socaial_media)
                            <li>
                                <a class="single-follower {{ $socaial_media->social_name }}-follower" href="{{ $socaial_media->social_link }}"> <i class="icon {{ $socaial_media->icon_class }}"></i> <span class="text">{{ $socaial_media->followers }} Follower</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget_recent_news">
                        <h3 class="widget-title">{!! HeadingStyle(translate()->pl_twenty_seven) !!}</h3>
                        <ul>
                            @foreach (MostRecentPost(newsCount()->recent_news_count) as $most_recent_side)
                            <li>
                                <div class="single-list-post ">
                                    <div class="post-thumbnail">
                                        <a href="{{ route('single.news', $most_recent_side->pl_slug) }}"><img src="{{ asset($most_recent_side->image->image_four) }}" alt="{{ $most_recent_side->image->image_alt }}" /></a>
                                    </div>
                                    <div class="post-info">
                                        <a href="{{ route('front.category', $most_recent_side->category->pl_slug) }}" class="catagory">{{ $most_recent_side->category->pl_name }}</a>
                                        <h3 class="post-title"><a href="{{ route('single.news', $most_recent_side->pl_slug) }}">{{ $most_recent_side->pl_headline }}</a></h3>
                                        <ul class="post-meta">
                                            <li><span><i class="far fa-clock"></i>{{ $most_recent_side->created_at->format('M d, Y') }}</span></li>
                                            <li><span><i class="far fa-comment"></i> Comment {{ $most_recent_side->comment->count() }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget_add_banenr">
                        <a href="#">
                            <img src="{{ asset('front/images/widget-add-banner.png') }}" alt="widget-add-banner" />
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!--categories page area end here  -->
<!-- releted Post area start here -->
<div class="releted-post-area pb-90">
    <div class="container">
        <div class="section-header">
            <div class="row aling-items-center">
                <div class="col-md-5">
                    <h2 class="section-title">{!! HeadingStyle(translate()->pl_twenty_five) !!}</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($most_visited_news as $nost_view_news_2)
            <div class="col-lg-6">
                <div class="single-list-post ">
                    <div class="post-thumbnail">
                        <a href="{{ route('single.news',  $nost_view_news_2->pl_slug) }}"><img src="{{ asset($nost_view_news_2->image_four) }}" alt="{{ $nost_view_news_2->image_alt }}" /></a>
                    </div>
                    <div class="post-info">
                        <a href="{{ route('front.category', $nost_view_news_2->pl_cat_slug) }}" class="catagory">{{ $nost_view_news_2->pl_name }}</a>
                        <h3 class="post-title"><a href="{{ route('single.news',  $nost_view_news_2->pl_slug) }}">{{ $nost_view_news_2->pl_headline }}</a></h3>
                        <ul class="post-meta">
                            <li><span><i class="far fa-clock"></i>{{ \Carbon\Carbon::parse($nost_view_news_2->created_at)->format('M d, Y') }}</span></li>
                            <li><span><i class="far fa-comment"></i> Comment {{ DB::table('comments')->where('news_id', $nost_view_news_2->id)->count() }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- releted Post area end here -->
@endsection
