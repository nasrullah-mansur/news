@extends('layouts.admin')

@section('css_plugin')
<link rel="stylesheet" href="{{ asset('admin/plugins/venobox/venobox.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/gallery.css') }}">
@endsection

@section('content')

  <!-- Video grid -->
  <section id="video-gallery" class="card">
    <div class="card-header">
      <h4 class="card-title">Video gallery</h4>
      <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
      <div class="heading-elements">
        <ul class="list-inline mb-0">
          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
          <li><a data-action="close"><i class="ft-x"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="card-content">

        <div class="card-body  my-gallery">
            <div class="row">
                @foreach ($video_gallery as $video)
              <figure class="col-lg-3 col-md-6 col-12 mb-2">
                <a data-autoplay="true" data-vbtype="video" href="{{ asset($video->video) }}" class="venobox" data-gall="gallery01">
                  <img class="img-thumbnail img-fluid" src="{{ asset($video->image->image_three) }}" itemprop="thumbnail" alt="{{ $video->image->image_alt }}" />
                </a>
              </figure>
              @endforeach
            </div>
            {{ $video_gallery->links() }}
          </div>
    </div>
  </section>
  <!-- Video grid -->
@endsection


@section('js_plugin')
<script src="{{ asset('admin/plugins/venobox/venobox.min.js') }}"></script>
@endsection

@section('custom_js')
<script>
    $(document).ready(function(){
    $('.venobox').venobox();
});
</script>
@endsection

