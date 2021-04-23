@extends('layouts.front')

@section('content')
<!-- breadcrumb area start here  -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">{!! active_lang() == 'pl' ? HeadingStyle(translate()->pl_thirty_nine) : HeadingStyle(translate()->sl_thirty_nine) !!}</h2>
                    <ul class="breadcrumb-page ">
                        <li><a href="index.html">Home</a></li>
                        <li>Request for Ad</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end here  -->
<!-- request-add area start here  -->
<section class="request-add-page section">
    <div class="container">
        <div class="request-add-form">
            <h2 class="form-title">{!! active_lang() == 'pl' ? HeadingStyle(translate()->pl_thirty_nine) : HeadingStyle(translate()->sl_thirty_nine) !!}</h2>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="yourname" name="name" placeholder="Your Name" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="number" name="number" placeholder="Your Number" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <textarea class="form-control message-box" id="message" name="message" placeholder="Write a short description . . . "></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="add-banenr-uplode" class="add-banenr-uplode">
                                <img src="assets/images/cloud-upload.png" alt="cloud-upload" />
                                <span class="uplode-label-text">JPG , PNG or PDF , Smaller  than 25MB</span>
                                <span class="choose-btn">Choose file</span>
                                <input type="file" name="file" class="form-control-file" id="add-banenr-uplode">
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="primary-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- request-add area end here  -->
@endsection
