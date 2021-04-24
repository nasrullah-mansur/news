@extends('layouts.admin')
@section('css_plugin')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/core/colors/palette-gradient.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="media align-items-stretch">
            <div class="p-2 text-center bg-primary bg-darken-2">
              <i class="icon-camera font-large-2 white"></i>
            </div>
            <div class="p-2 bg-gradient-x-primary white media-body">
              <h5>News</h5>
              <h5 class="text-bold-400 mb-0">{{ $news_count }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="media align-items-stretch">
            <div class="p-2 text-center bg-primary bg-darken-2">
              <i class="icon-camera font-large-2 white"></i>
            </div>
            <div class="p-2 bg-gradient-x-primary white media-body">
              <h5>Category</h5>
              <h5 class="text-bold-400 mb-0">{{ $category_count }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="media align-items-stretch">
            <div class="p-2 text-center bg-primary bg-darken-2">
              <i class="icon-camera font-large-2 white"></i>
            </div>
            <div class="p-2 bg-gradient-x-primary white media-body">
              <h5>User</h5>
              <h5 class="text-bold-400 mb-0">{{ $user_count }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="media align-items-stretch">
            <div class="p-2 text-center bg-primary bg-darken-2">
              <i class="icon-camera font-large-2 white"></i>
            </div>
            <div class="p-2 bg-gradient-x-primary white media-body">
              <h5>Subscriber</h5>
              <h5 class="text-bold-400 mb-0">{{ $subscriber_count }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="media align-items-stretch">
            <div class="p-2 text-center bg-primary bg-darken-2">
              <i class="icon-camera font-large-2 white"></i>
            </div>
            <div class="p-2 bg-gradient-x-primary white media-body">
              <h5>Visitor</h5>
              <h5 class="text-bold-400 mb-0">{{ $visitor_count }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="media align-items-stretch">
            <div class="p-2 text-center bg-primary bg-darken-2">
              <i class="icon-camera font-large-2 white"></i>
            </div>
            <div class="p-2 bg-gradient-x-primary white media-body">
              <h5>Image (gallery)</h5>
              <h5 class="text-bold-400 mb-0">{{ $image_count }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="media align-items-stretch">
            <div class="p-2 text-center bg-primary bg-darken-2">
              <i class="icon-camera font-large-2 white"></i>
            </div>
            <div class="p-2 bg-gradient-x-primary white media-body">
              <h5>Video (gallery)</h5>
              <h5 class="text-bold-400 mb-0">{{ $video_count }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="media align-items-stretch">
            <div class="p-2 text-center bg-primary bg-darken-2">
              <i class="icon-camera font-large-2 white"></i>
            </div>
            <div class="p-2 bg-gradient-x-primary white media-body">
              <h5>Page</h5>
              <h5 class="text-bold-400 mb-0">{{ $page_count }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
