@extends('layouts.front')

@section('content')
 <!-- breadcrumb area start here  -->
 <section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">{{ $result }}</h2>
                    <ul class="breadcrumb-page ">
                        <li><a href="index.html">Home</a></li>
                        <li>Search Result</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end here  -->
<!-- search News area start here  -->
<section class="search-page-area section">
    <div class="container">
        <div class="search-page-top mb-60">
            <div class="search-page-form">
                <form action="{{ route('news.search') }}" method="POST">
                    @csrf
                    <div class="form-group m-0">
                      <input type="text" class="form-control" id="blogsearch" name="search" value="{{ $result }}" />
                      <button type="submit" class="search-btn">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="section-header">
            <div class="row aling-items-center">
                <div class="col-md-5">
                    <h2 class="section-title">{{ $result }}</span></h2>
                </div>
                <div class="col-md-7 text-md-right">
                    <div class="tab-menu">
                        <ul class="nav nav-tabs" id="searchTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link {{ Route::is('search.result') ? 'active' : '' }}" href="{{ route('search.result', $result) }}">All News</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link {{ Route::is('search.result.image') ? 'active' : '' }}" href="{{ route('search.result.image', $result) }}">Imge News</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link {{ Route::is('search.result.video') ? 'active' : '' }}" href="{{ route('search.result.video', $result) }}">Video News</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active">
                <div class="post-list">
                    <div class="row">
                        @if(Route::is('search.result'))
                        @foreach ($news as $news_item)
                        <div class="col-lg-4 col-md-6">
                            <div class="{{ $news_item->video != null ? 'single-video-post' : 'single-grid-post' }}">
                                <div class="post-thumbnail">
                                    <a href="{{ route('single.news', $news_item->pl_slug) }}"><img src="{{ asset($news_item->image->image_three) }}" alt="{{ $news_item->image->image_alt }}" /></a>
                                    @if ($news_item->video != null)
                                    <a class="video-btn" href="{{ route('single.news', $news_item->pl_slug) }}"><i class="fas fa-play"></i></a>
                                    @endif
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $news_item->category->pl_slug) }}" class="catagory">{{ $news_item->category->pl_name }}</a>
                                    <h3 class="post-title"><a href="{{ route('single.news', $news_item->pl_slug) }}">{{ $news_item->pl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $news_item->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> {{ $news_item->comment->count() }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @elseif(Route::is('search.result.image'))
                        @foreach ($news as $news_item)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-grid-post">
                                <div class="post-thumbnail">
                                    <a href="{{ route('single.news', $news_item->pl_slug) }}"><img src="{{ asset($news_item->image->image_three) }}" alt="{{ $news_item->image->image_alt }}" /></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $news_item->category->pl_slug) }}" class="catagory">{{ $news_item->category->pl_name }}</a>
                                    <h3 class="post-title"><a href="{{ route('single.news', $news_item->pl_slug) }}">{{ $news_item->pl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $news_item->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> {{ $news_item->comment->count() }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @elseif(Route::is('search.result.video'))
                        @foreach ($news as $news_item)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-video-post">
                                <div class="post-thumbnail">
                                    <a href="{{ route('single.news', $news_item->pl_slug) }}"><img src="{{ asset($news_item->image->image_three) }}" alt="{{ $news_item->image->image_alt }}" /></a>
                                    <a class="video-btn" href="{{ route('single.news', $news_item->pl_slug) }}"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="post-info">
                                    <a href="{{ route('front.category', $news_item->category->pl_slug) }}" class="catagory">{{ $news_item->category->pl_name }}</a>
                                    <h3 class="post-title"><a href="{{ route('single.news', $news_item->pl_slug) }}">{{ $news_item->pl_headline }}</a></h3>
                                    <ul class="post-meta">
                                        <li><span><i class="far fa-clock"></i> {{ $news_item->created_at->format('M d, Y') }}</span></li>
                                        <li><span><i class="far fa-comment"></i> {{ $news_item->comment->count() }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination-area">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <nav class="page-nav">
                        {{ $news->onEachSide(5)->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search News area end here  -->
@endsection
