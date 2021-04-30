@extends('layouts.front')

@section('content')
 <!-- breadcrumb area start here  -->
 <section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">{!! active_lang() == 'pl' ? HeadingStyle(translate()->pl_thirty_one) : HeadingStyle(translate()->sl_thirty_one) !!} </h2>
                    <ul class="breadcrumb-page ">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end here  -->
<!-- contact-page area start here  -->
<section class="contact-page section">
    <div class="container">
        <div class="contact-page-top mb-50">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-info-top">
                            <h2>{!! active_lang() == 'pl' ? HeadingStyle(translate()->pl_thirty_two) : HeadingStyle(translate()->sl_thirty_two) !!}</h2>
                            <p>{!! active_lang() == 'pl' ? translate()->pl_thirty_eight : translate()->sl_thirty_eight !!}</p>
                        </div>
                        <div class="contact-info-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="single-info">
                                        <h4>{!! active_lang() == 'pl' ? translate()->pl_thirty_three : translate()->sl_thirty_three !!}</h4>
                                        {!! active_lang() == 'pl' ? ThemeSetting()->pl_address : ThemeSetting()->sl_address !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="single-info">
                                        <h4>{!! active_lang() == 'pl' ? translate()->pl_thirty_four : translate()->sl_thirty_four !!}</h4>
                                        {!! active_lang() == 'pl' ? ThemeSetting()->pl_support_hour  : ThemeSetting()->sl_support_hour !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="single-info">
                                        <h4>{!! active_lang() == 'pl' ? translate()->pl_thirty_five : translate()->sl_thirty_five !!}</h4>
                                        {!! ThemeSetting()->quick_contact !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2 class="contact-form-title">{!! active_lang() == 'pl' ? HeadingStyle(translate()->pl_thirty_six) : HeadingStyle(translate()->sl_thirty_six) !!}</h2>
                        <form action="{{ route('user.contact') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                                @if ($errors->has('email'))
                                    <span class="text-danger"> - {{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="yourname" name="name" placeholder="Your Name" />
                                @if ($errors->has('name'))
                                <span class="text-danger"> - {{ $errors->first('name') }}</span>
                            @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Your Subject" />
                                @if ($errors->has('subject'))
                                    <span class="text-danger"> - {{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <textarea class="form-control message-box" id="message" name="massage" placeholder="Write you text here . . . "></textarea>
                                @if ($errors->has('massage'))
                                    <span class="text-danger"> - {{ $errors->first('massage') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="primary-btn">{!! active_lang() == 'pl' ? translate()->pl_thirty_seven : translate()->sl_thirty_seven !!}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-page-bottom">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-area">
                        <div id="gmap" class="google-map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-page area end here  -->
@endsection

@section('custom_js')
{!! ThemeSetting()->google_map !!}
<script src="{{ asset('front/js/gmaps.js') }}"></script>

{!! ThemeSetting()->google_map_script !!}
@endsection
