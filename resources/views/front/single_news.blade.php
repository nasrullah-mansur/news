@extends('layouts.front')

@section('content')
        <!-- breadcrumb area start here  -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <h2 class="page-title">{{ active_lang() == 'pl' ? translate()->pl_fifteen : translate()->sl_fifteen }}</h2>
                            <ul class="breadcrumb-page ">
                                <li><a href="index.html">Home</a></li>
                                <li>Business</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end here  -->
        <!-- Single News Page start here  -->
        <section class="single-blog-page section">
            <div class="container">
                <div class="single-post">
                    <a href="#" class="post-catagory">{{ $news->category->pl_name }}</a>
                    <h2 class="post-title">{{ $news->pl_headline }}</h2>
                    <div class="post-thumbnail">
                        <img  src="{{ asset($news->image->image_one) }}" alt="{{ $news->image->image_alt }}" />
                        @if ($news->video != null)
                        <a class="video-btn popup-video" data-autoplay="true" data-vbtype="video" href="{{ $news->video }}"><i class="fas fa-play"></i></a>

                        @endif
                    </div>
                    <div class="post-meta d-flex justify-content-between align-items-center">
                        <div class="post-meta-left d-flex align-items-center">
                            <div class="author d-flex align-items-center">
                                <a href="#" class="author-image"><img src="{{ $news->user->profile->profile == null ? Avatar::create($news->user->name)->toBase64() : asset($news->user->profile->profile) }}" alt="{{ $news->user->name }}" /></a>
                                <h4 class="author-name mb-0">By <a href="#">{{ $news->user->name }}</a></h4>
                            </div>
                            <span class="post-time"><i class="far fa-clock"></i> {{ $news->created_at->format('D m, Y') }}</span>
                        </div>
                        <div class="post-meta-right">
                            <a class="comment" href="#comment_post"><i class="far fa-comment"></i> Comment {{ count($comments) }}</a>
                        </div>
                    </div>
                    <div class="post-share d-flex align-items-center">
                        <span class="share-title"><i class="fas fa-share"></i> Share</span>
                        <ul class="share-list">
                            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li class="twiter"><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li class="instagram"><a href="#"><i class="fab fa-instagram"></i> instagram</a></li>
                        </ul>
                    </div>
                    <div class="post-content">
                        {!! $news->pl_details !!}
                    </div>

                    <div class="add-area">
                        <a href="#">
                            <img src="{{ asset('front/images/big-add-banner.png') }}" alt="big-add-banner" />
                        </a>
                    </div>
                    <div class="post-tags">
                        <ul>
                            @foreach (explode(',', $news->tags) as $single_tag)
                            <li><a href="#">{{ $single_tag }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="comment-post" id="comment_post">
                    <h2 class="section-title">{{ translate()->pl_sixteen }}</h2>
                    <ul class="comments-list mt-45">
                        @foreach ($comments as $comment)
                        <li class="single-comment">
                            <div class="media">
                                <img src="{{ Avatar::create($comment->name)->toBase64() }}" class="comments-avatar" alt="comment" />
                                <div class="media-body">
                                  <div class="avatar-info d-flex">
                                    <span class="avatar-name">{{ $comment->name }}</span>
                                    <span class="comment-time">{{ $comment->created_at->format('M d, Y') }}</span>
                                    <a href="#leve_comment" class="reply"><i data-id="{{ $comment->id }}" class="fas fa-reply"></i></a>
                                  </div>
                                  <p class="comment-text">{{ $comment->comment }}</p>
                                </div>
                            </div>
                            @if($comment->reply != null)
                            <ul class="children">
                                @foreach ($comment->reply as $reply_comment)
                                <li class="single-comment">
                                    <div class="media">
                                        <img src="{{ Avatar::create($reply_comment->name)->toBase64() }}" class="comments-avatar" alt="comment" />
                                        <div class="media-body">
                                          <div class="avatar-info d-flex">
                                            <span class="avatar-name">{{ $reply_comment->name }}</span>
                                            <span class="comment-time">{{ $reply_comment->created_at->format('M d, Y') }}</span>
                                            <a href="#leve_comment" class="reply"><i data-id="{{ $comment->id }}" class="fas fa-reply"></i></a>
                                          </div>
                                          <p class="comment-text">{{ $reply_comment->comment }}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>

                        @endforeach
                    </ul>
                </div>
                <!-- comments area start here  -->
                @if (active_lang() == 'pl')
                <div class="comments" style="padding-top: 50px" id="leve_comment">
                    <h2 class="section-title">{{ translate()->pl_seventeen }}</h2>
                    <div class="comments-form mt-45">
                        <form action="{{ route('comment.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control comment-box" id="commentbox" name="comment" placeholder="{{ translate()->pl_eighteen }}"></textarea>
                                        @if($errors->has('comment'))
                                        <span class="text-danger">{{ $errors->first('comment') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 .col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="yourname" name="name" placeholder="{{ translate()->pl_nineteen }}" />
                                        @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 .col-md-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="youremail" name="email" placeholder="{{ translate()->pl_twenty }}" />
                                        @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 .col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phonenumber" name="phone" placeholder="{{ translate()->pl_twenty_one }}" />
                                        @if($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="hidden" name="p_id" value="0">
                                    <input type="hidden" name="news_id" value="{{ $news->id }}">
                                    <button  type="submit" class="primary-btn">{{ translate()->pl_twenty_two }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @else
                <div class="comments" style="padding-top: 50px" id="leve_comment">
                    <h2 class="section-title">{{ translate()->sl_seventeen }}</h2>
                    <div class="comments-form mt-45">
                        <form action="{{ route('comment.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control comment-box" id="commentbox" name="comment" placeholder="{{ translate()->sl_eighteen }}"></textarea>
                                        @if($errors->has('comment'))
                                        <span class="text-danger">{{ $errors->first('comment') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 .col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="yourname" name="name" placeholder="{{ translate()->sl_nineteen }}" />
                                        @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 .col-md-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="youremail" name="email" placeholder="{{ translate()->sl_twenty }}" />
                                        @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 .col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phonenumber" name="phone" placeholder="{{ translate()->sl_twenty_one }}" />
                                        @if($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="hidden" name="p_id" value="0">
                                    <input type="hidden" name="news_id" value="{{ $news->id }}">
                                    <button  type="submit" class="primary-btn">{{ translate()->sl_twenty_two }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
                <!-- comments area start here  -->
            </div>
        </section>
        <!-- Single News Page end here  -->

        <!-- releted Post area start here -->
        @if (active_lang() == 'pl')
        <div class="releted-post-area pb-90">
            <div class="container">
                <div class="section-header">
                    <div class="row aling-items-center">
                        <div class="col-md-5">
                            <h2 class="section-title">{!! HeadingStyle(translate()->pl_twenty_three) !!}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relatedNews as $news_item)
                    <div class="col-lg-6">
                        <div class="single-list-post ">
                            <div class="post-thumbnail">
                                <a href="{{ route('single.news', $news_item->pl_slug) }}"><img src="{{ asset($news_item->image->image_four) }}" alt="{{ $news_item->image->image_alt }}" /></a>
                            </div>
                            <div class="post-info">
                                <a href="{{ route('front.category', $news_item->category->pl_slug) }}" class="catagory">{{ $news_item->category->pl_name }}</a>
                                <h3 class="post-title"><a href="{{ route('single.news', $news_item->pl_slug) }}">{{ $news_item->pl_headline }}</a></h3>
                                <ul class="post-meta">
                                    <li><span><i class="far fa-clock"></i> {{ $news_item->created_at->format('M d, Y') }}</span></li>
                                    <li><span><i class="far fa-comment"></i> Comment {{ $news_item->comment->count() }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
        @else
        <div class="releted-post-area pb-90">
            <div class="container">
                <div class="section-header">
                    <div class="row aling-items-center">
                        <div class="col-md-5">
                            <h2 class="section-title">{!! HeadingStyle(translate()->sl_twenty_three) !!}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relatedNews as $news_item)
                    <div class="col-lg-6">
                        <div class="single-list-post ">
                            <div class="post-thumbnail">
                                <a href="{{ route('single.news', $news_item->sl_slug) }}"><img src="{{ asset($news_item->image->image_four) }}" alt="{{ $news_item->image->image_alt }}" /></a>
                            </div>
                            <div class="post-info">
                                <a href="{{ route('front.category', $news_item->category->pl_slug) }}" class="catagory">{{ $news_item->category->sl_name }}</a>
                                <h3 class="post-title"><a href="{{ route('single.news', $news_item->sl_slug) }}">{{ $news_item->sl_headline }}</a></h3>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-clock"></i> {{ $news_item->created_at->format('M d, Y') }}</a></li>
                                    <li><a href="#"><i class="far fa-comment"></i> Comment {{ $news_item->comment->count() }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <!-- releted Post area end here -->
@endsection

@section('custom_js')
<script>
    $('.reply').on('click', function(e) {
        $('input[name="p_id"]').val(e.target.getAttribute('data-id'))
    })
</script>
@endsection
