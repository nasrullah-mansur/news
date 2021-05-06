@extends('layouts.admin')

@section('css_plugin')
@include('components.summernote_css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/plugins/forms/checkboxes-radios.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/forms/icheck/icheck.css') }}">
@endsection

@section('content')
<section id="basic-form-layouts">
    <form action="{{ route('theme.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Theme Info Setting</h4>
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
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="theme_name">Theme Name</label>
                          <div class="col-md-9">
                            <input type="text" id="theme_name" class="form-control {{ $errors->has('theme_name') ? 'is-invalid' : '' }}" placeholder="Theme name" name="theme_name" value="{{ $theme->theme_name }}">
                            @if($errors->has('theme_name'))
                            <span class="text-danger"> - {{ $errors->first('theme_name') }}</span>
                            @endif
                          </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 label-control">Primary Logo</label>
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
                            <label class="col-md-3 label-control" for="pl_name">Primary Language Name</label>
                            <div class="col-md-9">
                              <input type="text" id="pl_name" class="form-control {{ $errors->has('pl_name') ? 'is-invalid' : '' }}" placeholder="Primary Language Name" name="pl_name" value="{{ $theme->pl_name }}">
                              @if($errors->has('pl_name'))
                                <span class="text-danger"> - {{ $errors->first('pl_name') }}</span>
                                @endif
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
                            <label class="col-md-3 label-control" for="sl_name">Secondary Language Name</label>
                            <div class="col-md-9">
                              <input type="text" id="sl_name" class="form-control {{ $errors->has('sl_name') ? 'is-invalid' : '' }}" placeholder="Secondary Language Name" name="sl_name" value="{{ $theme->sl_name }}">
                              @if($errors->has('sl_name'))
                            <span class="text-danger"> - {{ $errors->first('sl_name') }}</span>
                            @endif
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

                        <div class="form-group row skin skin-square">
                            <label for="layout" class="col-md-3 label-controll">Theme Layout</label>
                            <div class="col-md-9">
                                <fieldset>
                                    <input type="radio" name="layout" value="ltr" id="input-radio-11" {{ $theme->layout == 'ltr' ? 'checked' : '' }}>
                                    <label for="input-radio-11">Left To Right</label>
                                  </fieldset>
                                  <fieldset>
                                    <input type="radio" name="layout" value="rtl" id="input-radio-12" {{ $theme->layout == 'rtl' ? 'checked' : '' }}>
                                    <label for="input-radio-12">Right To Left</label>
                                  </fieldset>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="google_map">Google Map API</label>
                            <div class="col-md-9">
                              <textarea id="google_map" rows="3" class="form-control {{ $errors->has('google_map') ? 'is-invalid' : '' }}" name="google_map" placeholder="Google Map" value="{{ $theme->google_map }}">{{ $theme->google_map }}</textarea>
                              @if($errors->has('google_map'))
                            <span class="text-danger"> - {{ $errors->first('google_map') }}</span>
                            @endif
                            </div>
                          </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="google_map_script">Google Map API Script</label>
                            <div class="col-md-9">
                              <textarea id="google_map_script" rows="6" class="form-control {{ $errors->has('google_map_script') ? 'is-invalid' : '' }}" name="google_map_script" placeholder="Google Map" value="{{ $theme->google_map_script }}">{{ $theme->google_map_script }}</textarea>
                              @if($errors->has('google_map_script'))
                            <span class="text-danger"> - {{ $errors->first('google_map_script') }}</span>
                            @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="pl_address">Address PL</label>
                            <div class="col-md-9">
                              <textarea type="text" id="pl_address" class="form-control summernote" name="pl_address" value="{{ $theme->pl_address }}">{{ $theme->pl_address }}</textarea>
                              @if($errors->has('pl_address'))
                            <span class="text-danger"> - {{ $errors->first('pl_address') }}</span>
                            @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="sl_address">Address SL</label>
                            <div class="col-md-9">
                              <textarea type="text" id="sl_address" class="form-control summernote" name="sl_address" value="{{ $theme->sl_address }}">{{ $theme->sl_address }}</textarea>
                              @if($errors->has('sl_address'))
                            <span class="text-danger"> - {{ $errors->first('sl_address') }}</span>
                            @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="pl_support_hour">Support Hours</label>
                            <div class="col-md-9">
                              <textarea type="text" id="pl_support_hour" class="form-control summernote" name="pl_support_hour" value="{{ $theme->pl_support_hour }}">{{ $theme->pl_support_hour }}</textarea>
                              @if($errors->has('pl_support_hour'))
                            <span class="text-danger"> - {{ $errors->first('pl_support_hour') }}</span>
                            @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="sl_support_hour">Support Hours</label>
                            <div class="col-md-9">
                              <textarea type="text" id="sl_support_hour" class="form-control summernote" name="sl_support_hour" value="{{ $theme->sl_support_hour }}">{{ $theme->sl_support_hour }}</textarea>
                              @if($errors->has('sl_support_hour'))
                            <span class="text-danger"> - {{ $errors->first('sl_support_hour') }}</span>
                            @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="quick_contact">Quick Contact</label>
                            <div class="col-md-9">
                              <textarea type="text" id="quick_contact" class="form-control summernote" name="quick_contact" value="{{ $theme->quick_contact }}">{{ $theme->quick_contact }}</textarea>
                              @if($errors->has('quick_contact'))
                            <span class="text-danger"> - {{ $errors->first('quick_contact') }}</span>
                            @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="copyright">Copyright</label>
                            <div class="col-md-9">
                              <textarea type="text" id="copyright" class="form-control summernote" name="copyright" value="{{ $theme->copyright }}">{{ $theme->copyright }}</textarea>
                              @if($errors->has('copyright'))
                            <span class="text-danger"> - {{ $errors->first('copyright') }}</span>
                            @endif
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
<script src="{{ asset('admin/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
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
<script src="{{ asset('admin/js/scripts/forms/checkbox-radio.js') }}" type="text/javascript"></script>
@endsection
