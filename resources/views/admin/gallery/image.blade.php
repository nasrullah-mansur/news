@extends('layouts.admin')

@section('css_plugin')
<link rel="stylesheet" href="{{ asset('admin/plugins/venobox/venobox.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/gallery.css') }}">
@endsection

@section('content')
<!-- Image grid -->
<section id="image-gallery" class="card">
    <div class="card-header">
      <h4 class="card-title">Image gallery</h4>
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

      <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
        <div class="row">
            @foreach ($images as $image)
          <figure class="col-lg-3 col-md-6 col-12 mb-2">
            <a href="{{ asset($image->image_one) }}" class="venobox" data-gall="gallery01">
              <img class="img-thumbnail img-fluid" src="{{ asset($image->image_three) }}" itemprop="thumbnail" alt="{{ $image->image_alt }}" />
            </a>
          </figure>
          @endforeach

        </div>
        {{ $images->links() }}

      </div>
  </section>
  <!--/ Image grid -->

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
