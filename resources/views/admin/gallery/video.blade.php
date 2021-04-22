@extends('layouts.admin')

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

      <div class="card-body">
        <h5 class="card-header">You Tube</h5>
        <div class="row">
            @foreach ($videos as $video)
            <div class="col-lg-3 col-md-6 col-12 mb-2">
              <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
                {!! $video->video !!}
              </div>
            </div>
            @endforeach
        </div>
        {{ $videos->links() }}
      </div>
    </div>
  </section>
  <!-- Video grid -->
@endsection
