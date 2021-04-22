@extends('layouts.admin')

@section('css_plugin')
@include('components.summernote_css')
@endsection

@section('content')
<section id="basic-form-layouts">
    <form action="{{ route('my.profile.update' ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
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
                <div class="card-content collapse show">

                <div class="card-body">
                    <div class="form-body">
                        <h4 class="form-section">Theme Info</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="name">Your Name</label>
                          <div class="col-md-9">
                            <input type="text" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Theme name" name="name" value="{{ $profile->user->name }}">
                            @if($errors->has('name'))
                            <span class="text-danger"> - {{ $errors->first('name') }}</span>
                            @endif
                          </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 label-control">Profile Image</label>
                            <div class="col-md-9">
                                <img id="profile_img" src="{{ $profile->profile == null ? asset('admin/images/portrait/small/avatar-s-8.png') : asset($profile->profile) }}" alt="{{ $profile->user->name }}">
                              <br>
                              <br>
                                <label class="file center-block">
                                <input id="profile_input" name="profile" type="file" class="d-none" value="{{ $profile->profile }}">
                                <span class="file-custom btn btn-info">Change Profile</span>
                              </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control">Banner Image</label>
                            <div class="col-md-9">
                                <img id="banner_img" src="{{ $profile->banner == null ? asset('admin/images/carousel/22.jpg') : asset($profile->banner) }}" alt="{{ $profile->user->name }}">
                              <br>
                              <br>
                                <label class="file center-block">
                                <input id="banner_input" name="banner" type="file" class="d-none" value="{{ $profile->banner }}">
                                <span class="file-custom btn btn-info">Change banner</span>
                              </label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="facebook">Facebook</label>
                            <div class="col-md-9">
                              <input type="text" id="facebook" class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" placeholder="Theme name" name="facebook" value="{{ $profile->facebook }}">
                                @if($errors->has('facebook'))
                                <span class="text-danger"> - {{ $errors->first('facebook') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="twitter">Twitter</label>
                            <div class="col-md-9">
                              <input type="text" id="twitter" class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" placeholder="Theme name" name="twitter" value="{{ $profile->twitter }}">
                              @if($errors->has('twitter'))
                              <span class="text-danger"> - {{ $errors->first('twitter') }}</span>
                              @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="linkedin">Linkedin</label>
                            <div class="col-md-9">
                              <input type="text" id="linkedin" class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" placeholder="Theme name" name="linkedin" value="{{ $profile->linkedin }}">
                              @if($errors->has('linkedin'))
                              <span class="text-danger"> - {{ $errors->first('linkedin') }}</span>
                              @endif
                            </div>
                        </div>


                          <div class="form-group row">
                            <div class="col-md-9 ml-auto">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Update Profile </button>
                            </div>
                          </div>

                      </div>

                </div>
                </div>
            </div>
            </div>

            </div>
        </div>
    </form>
  </section>
@endsection


@section('js_plugin')
@include('components.summernote_js')
@endsection

@section('custom_js')
<script>
 $("#profile_input").change(function() {
    readURL(this, $('#profile_img'));
});

 $("#banner_input").change(function() {
    readURL(this, $('#banner_img'));
});

</script>
@endsection
