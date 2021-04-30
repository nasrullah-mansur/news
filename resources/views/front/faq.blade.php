@extends('layouts.front')

@section('content')
<!-- breadcrumb area start here  -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Faq</h2>
                    <ul class="breadcrumb-page ">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end here  -->
<!-- Faq page start here  -->
<section class="faq-page section-top pb-90">
    <div class="container">
        <div class="section-title-area mb-50">
            <h2 class="section-title">Most Popular <span>Faq  Qustion</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion" id="accordionFaq">
                    @if (active_lang() == 'pl')
                    @foreach ($faqs as $faq)
                    <div class="card">
                      <div class="card-header" id="heading{{ $faq->id }}">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $faq->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $faq->id }}">
                           <span class="qicon">Q</span> {{ $faq->pl_question }}
                        </button>
                      </div>
                      <div id="collapse{{ $faq->id }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $faq->id }}" data-parent="#accordionFaq">
                        <div class="card-body">
                          <div class="anser-text">
                            <span class="ans-icon">a</span>
                            {!! $faq->pl_answer !!}
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    @else
                    @foreach ($faqs as $faq)
                    <div class="card">
                      <div class="card-header" id="heading{{ $faq->id }}">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $faq->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $faq->id }}">
                           <span class="qicon">Q</span> {{ $faq->sl_question }}
                        </button>
                      </div>
                      <div id="collapse{{ $faq->id }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $faq->id }}" data-parent="#accordionFaq">
                        <div class="card-body">
                          <div class="anser-text">
                            <span class="ans-icon">a</span>
                            {!! $faq->sl_answer !!}
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq page end here  -->
@endsection
