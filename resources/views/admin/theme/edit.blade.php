@extends('layouts.admin')

@section('css_plugin')
@include('components.summernote_css')
@endsection

@section('content')
<section id="basic-form-layouts">
    <form action="{{ route('theme.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ $errors }}
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
                          <label class="col-md-3 label-control" for="theme_name">Theme Name</label>
                          <div class="col-md-9">
                            <input type="text" id="theme_name" class="form-control" placeholder="Theme name" name="theme_name" value="{{ $theme->theme_name }}">
                          </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 label-control">Logo</label>
                            <div class="col-md-9">
                                <img id="logo_preview" src="{{ asset($theme->logo) }}" alt="">
                              <br>
                              <br>
                                <label class="file center-block">
                                <input id="logo_input" name="logo" type="file" class="d-none" value="{{ $theme->logo }}">
                                <span class="file-custom btn btn-info">Change logo</span>
                              </label>
                            </div>
                          </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control">Footer Logo</label>
                            <div class="col-md-9">
                                <img id="f_logo_img" src="{{ asset($theme->footer_logo) }}" alt="">
                              <br>
                              <br>
                                <label class="file center-block">
                                <input id="f_logo_input" name="footer_logo" type="file" class="d-none" value="{{ $theme->footer_logo }}">
                                <span class="file-custom btn btn-info">Change footer logo</span>
                              </label>
                            </div>
                          </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control">Primary Language Flag</label>
                            <div class="col-md-9">
                                <img id="pl_flag_img" src="{{ asset($theme->pl_flag) }}" alt="">
                              <br>
                              <br>
                                <label class="file center-block">
                                <input id="pl_flag_input" name="pl_flag" type="file" class="d-none" value="{{ $theme->pl_flag }}">
                                <span class="file-custom btn btn-info">Change ml flag</span>
                              </label>
                            </div>
                          </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control">Secondary Language Flag</label>
                            <div class="col-md-9">
                                <img id="sl_flag_img" src="{{ asset($theme->sl_flag) }}" alt="">
                              <br>
                              <br>
                                <label class="file center-block">
                                <input id="sl_flag_input" name="sl_flag" type="file" class="d-none" value="{{ $theme->sl_flag }}">
                                <span class="file-custom btn btn-info">Change sl flag</span>
                              </label>
                            </div>
                          </div>


                        <div class="form-group row">
                            <label class="col-md-3 label-control">Favicon</label>
                            <div class="col-md-9">
                                <img id="favicon_img" src="{{ asset($theme->favicon) }}" alt="">
                                <br>
                                <br>
                              <label class="file center-block">
                                <input id="favicon_input" name="favicon" type="file" class="d-none" value="{{ $theme->favicon }}">
                                <span class="file-custom btn btn-info">Change favicon</span>
                              </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="google_map">Google Map</label>
                            <div class="col-md-9">
                              <textarea id="google_map" rows="5" class="form-control" name="google_map" placeholder="Google Map" value="{{ $theme->google_map }}">{{ $theme->google_map }}</textarea>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="copyright">Copyright</label>
                            <div class="col-md-9">
                              <textarea type="text" id="copyright" class="form-control summernote" name="copyright" value="{{ $theme->copyright }}">{{ $theme->copyright }}</textarea>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-md-9 ml-auto">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Update Theme Info </button>
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
 $("#logo_input").change(function() {
    readURL(this, $('#logo_preview'));
});

 $("#f_logo_input").change(function() {
    readURL(this, $('#f_logo_img'));
});

 $("#pl_flag_input").change(function() {
    readURL(this, $('#pl_flag_img'));
});

 $("#sl_flag_input").change(function() {
    readURL(this, $('#sl_flag_img'));
});

 $("#favicon_input").change(function() {
    readURL(this, $('#favicon_img'));
});
</script>
@endsection
