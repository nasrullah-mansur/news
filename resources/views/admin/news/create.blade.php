@extends('layouts.admin')
@section('css_plugin')
@include('components.summernote_css')
@include('components.taginput_css')
@include('components.select_2_css')
@endsection

@section('content')
<section id="basic-form-layouts">
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
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
                        <h4 class="form-section border-bottom mb-2 pb-1">News Headline</h4>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="pl_headline">News Headline (PL)</label>
                            <input type="text" id="pl_headline" class="form-control {{ $errors->has('pl_headline') ? 'is-invalid' : '' }}" placeholder="News Headline (PL)" name="pl_headline" value="{{ old('pl_headline') }}">
                            @if ($errors->has('pl_headline'))
                                <div class="invalid-feedback">{{ $errors->first('pl_headline') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="sl_headline">News Headline (SL)</label>
                            <input type="text" id="sl_headline" class="form-control {{ $errors->has('sl_headline') ? 'is-invalid' : '' }}" placeholder="News Headline (SL)" name="sl_headline" value="{{ old('sl_headline') }}">
                            @if ($errors->has('sl_headline'))
                                <div class="invalid-feedback">{{ $errors->first('sl_headline') }}</div>
                            @endif
                            </div>
                        </div>
                        </div>

                        <h4 class="form-section border-bottom mb-2 mt-3 pb-1">News Details</h4>

                        <div class="form-group">
                        <label for="pl_details">News Details (PL)</label>
                        <textarea id="pl_details" rows="5" class="form-control summernote {{ $errors->has('pl_details') ? 'is-invalid' : '' }}" name="pl_details" placeholder="News Details (PL)">{{ old('pl_details') }}</textarea>
                        @if ($errors->has('pl_details'))
                            <div class="invalid-feedback">{{ $errors->first('pl_details') }}</div>
                        @endif
                        </div>

                        <div class="form-group">
                        <label for="sl_details">News Details (SL)</label>
                        <textarea id="sl_details" rows="5" class="form-control summernote" name="sl_details {{ $errors->has('sl_details') ? 'is-invalid' : '' }}" placeholder="News Details (SL)">{{ old('sl_details') }}</textarea>
                        @if ($errors->has('sl_details'))
                            <div class="invalid-feedback">{{ $errors->first('sl_details') }}</div>
                        @endif
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="card collapse-icon accordion-icon-rotate border border-light">
                            <div id="seo-content-title" class="card-header">
                                <a data-toggle="collapse" href="#seo-content" aria-expanded="true" aria-controls="seo-content" class="card-title lead">Search Engine Optimize</a>
                            </div>
                            <div id="seo-content" role="tabpanel" aria-labelledby="seo-content-title" class="collapse">
                                <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="pl_seo_title">SEO Title (PL)</label>
                                        <input type="text" id="pl_seo_title" class="form-control" placeholder="SEO Title (PL)" name="pl_seo_title" value="{{ old('pl_seo_title') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="sl_seo_title">SEO Title (SL)</label>
                                        <input type="text" id="sl_seo_title" class="form-control" placeholder="SEO Title (SL)" name="sl_seo_title" value="{{ old('sl_seo_title') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="pl_seo_tag">SEO Tag (PL)</label>
                                        <input type="text" id="pl_seo_tag" class="form-control" placeholder="SEO Tag (PL)" name="pl_seo_tag" value="{{ old('pl_seo_tag') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="sl_seo_tag">SEO Tag (SL)</label>
                                        <input type="text" id="sl_seo_tag" class="form-control" placeholder="SEO Tag (SL)" name="sl_seo_tag" value="{{ old('sl_seo_tag') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="pl_description">SEO description (PL)</label>
                                        <textarea id="pl_description" rows="5" class="form-control" name="pl_seo_description" placeholder="SEO description (PL)">{{ old('pl_seo_description') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="sl_description">SEO description (SL)</label>
                                        <textarea id="sl_description" rows="5" class="form-control" name="sl_seo_description" placeholder="SEO description (SL)">{{ old('sl_seo_description') }}</textarea>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
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

                        <div class="form-group">
                            <label>Select Category</label>
                            <select class="select2 form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category" >
                                <option></option>
                                @foreach ($categories as $category )
                                    <option value="{{ $category->id }}">{{ $category->pl_name . ' / ' . $category->sl_name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <div class="invalid-feedback d-block">{{ $errors->first('category') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                        <fieldset class="form-group">
                            <label>News Image</label>
                            <img id="preview" style="max-height: 120px" class="img-fluid d-block mb-1" src="{{ asset('admin/images/thumbnail.jpg') }}" alt="News image">
                            <input type="file" name="image" class="form-control-file {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image">
                            @if ($errors->has('image'))
                                <div class="invalid-feedback d-block">{{ $errors->first('image') }}</div>
                            @endif
                        </fieldset>
                        </div>

                        <div class="form-group">
                        <fieldset class="form-group">
                            <label for="image_alt">Image Alternative Text</label>
                            <input type="text" id="image_alt" class="form-control" placeholder="Image Alternative Text" name="image_alt" value="{{ old('image_alt') }}">
                        </fieldset>
                        </div>

                        <div class="form-group">
                        <fieldset class="form-group">
                            <label for="video">Video Link</label>
                            <input type="text" id="video" class="form-control" placeholder="Video Link" name="video" value="{{ old('video') }}">
                        </fieldset>
                        </div>

                        <div class="form-group">
                        <label>News Status</label>
                        <select class="form-control" name="action">
                            <option value="1">Publish</option>
                            <option value="2">Draft</option>
                            <option value="3">Pending</option>
                        </select>
                        @if ($errors->has('action'))
                            <div class="invalid-feedback d-block">{{ $errors->first('action') }}</div>
                        @endif
                        </div>

                        <fieldset>
                        <label>Tags</label>
                        <div class="form-group">
                            <div class="tagging form-control" style="padding: 10px 15px;">{{ old('news') }}</div>
                            @if ($errors->has('tag'))
                                <div class="invalid-feedback d-block">{{ $errors->first('tag') }}</div>
                            @endif
                        </div>
                        </fieldset>




                    <div class="form-actions">
                        <button type="reset" class="btn btn-warning mr-1"><i class="ft-x"></i> Reset </button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save </button>
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
@include('components.select_2_js')
@include('components.taginput_js')
@endsection

@section('custom_js')
<script>
    $(".select2").select2({
        placeholder: "Select Category",
        allowClear: true
    });
    $("#image").change(function() {
        readURL(this, $('#preview'));
    });



</script>
@endsection
