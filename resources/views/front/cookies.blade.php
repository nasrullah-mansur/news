@extends('layouts.front')

@section('content')
   <!-- breadcrumb area start here  -->
   <section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">{!! active_lang() == 'pl' ? HeadingStyle(translate()->pl_thirty) : HeadingStyle(translate()->sl_thirty) !!} </h2>
                    <ul class="breadcrumb-page ">
                        <li><a href="index.html">Home</a></li>
                        <li>Cookies </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end here  -->

@if (active_lang() == 'pl')
{!! $cookies_content->pl_content !!}
@else
{!! $cookies_content->sl_content !!}
@endif

@endsection
