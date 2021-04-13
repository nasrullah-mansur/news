@extends('layouts.admin')
@section('css_plugin')
@include('components.select_2_css')
@endsection

@section('content')
<section id="basic-form-layouts">
    <form action="{{ route('admin.footer.update') }}" method="POST">
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
                            <h4 class="form-section border-bottom mb-2 pb-1">Footer Section</h4>
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Wizard One By</label>
                                        <select class="wizard-one form-control {{ $errors->has('wizard_one_by') ? 'is-invalid' : '' }}" name="wizard_one_by" >
                                            <option {{ $footer->wizard_one_by == 1 ? 'selected' : '' }} value="1">Most visited post</option>
                                            <option {{ $footer->wizard_one_by == 2 ? 'selected' : '' }} value="2">Most recent post</option>
                                        </select>
                                        @if ($errors->has('wizard_one_by'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('wizard_one_by') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="wizard_one_count">Wizard One Count</label>
                                    <input type="number" id="wizard_one_count" class="form-control {{ $errors->has('wizard_one_count') ? 'is-invalid' : '' }}" placeholder="Wizard one count" name="wizard_one_count" value="{{ $footer->wizard_one_count }}">
                                    @if ($errors->has('wizard_one_count'))
                                        <div class="invalid-feedback">{{ $errors->first('wizard_one_count') }}</div>
                                    @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="quick_link_count">Quick Link Count</label>
                                    <input type="number" id="quick_link_count" class="form-control {{ $errors->has('quick_link_count') ? 'is-invalid' : '' }}" placeholder="Wizard one count" name="quick_link_count" value="{{ $footer->quick_link_count }}">
                                    @if ($errors->has('quick_link_count'))
                                        <div class="invalid-feedback">{{ $errors->first('quick_link_count') }}</div>
                                    @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Categories</label>
                                        <select class="select2 form-control {{ $errors->has('categories') ? 'is-invalid' : '' }}" multiple="multiple" name="categories[]" >
                                            @foreach ($categories as $category)
                                            <option {{ in_array($category->id, explode(',', $footer->categories)) ? 'selected' : '' }}  value="{{ $category->id }}">{{ $category->pl_name . ' / ' . $category->sl_name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('categories'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('categories') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Images From</label>
                                        <select class="images-from form-control {{ $errors->has('images_from') ? 'is-invalid' : '' }}" name="images_from" >
                                            @foreach ($categories as $category)
                                                <option {{ $footer->images_from == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->pl_name . ' / ' . $category->sl_name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('images_from'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('images_from') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Images By</label>
                                        <select class="select2 form-control {{ $errors->has('image_by') ? 'is-invalid' : '' }}" name="image_by" >
                                            <option {{ $footer->image_by == 1 ? 'selected' : '' }} value="1">Most visited post</option>
                                            <option {{ $footer->image_by == 2 ? 'selected' : '' }} value="2">Most recent post</option>
                                        </select>
                                        @if ($errors->has('image_by'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('image_by') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="image_count">Image Count</label>
                                    <input type="number" id="image_count" class="form-control {{ $errors->has('image_count') ? 'is-invalid' : '' }}" placeholder="Wizard one count" name="image_count" value="{{ $footer->image_count }}">
                                    @if ($errors->has('image_count'))
                                        <div class="invalid-feedback">{{ $errors->first('image_count') }}</div>
                                    @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save </button>
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
@include('components.select_2_js')
@endsection

@section('custom_js')
<script>
    $(".select2").select2({
        placeholder: "Select Category",
        allowClear: false
    });
    $(".wizard-one").select2({
        placeholder: "Select",
        allowClear: false
    });
    $(".images-from").select2({
        placeholder: "Images From",
        allowClear: false
    });
</script>

@if(Session::has('update'))
<script>
    toastr.success("Successfully updated!", "WELL DONE");
</script>
@endif
@endsection
