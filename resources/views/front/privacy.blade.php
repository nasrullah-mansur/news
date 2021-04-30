@extends('layouts.front')

@section('content')
        <!-- breadcrumb area start here  -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <h2 class="page-title">{!! active_lang() == 'pl' ? HeadingStyle(translate()->pl_twenty_nine) : HeadingStyle(translate()->sl_twenty_nine) !!}</h2>
                            <ul class="breadcrumb-page ">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Privacy policy </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end here  -->
        @if (active_lang() == 'pl')
        {!! $privacy_content->pl_content !!}
        @else
        {!! $privacy_content->sl_content !!}
        @endif
@endsection
