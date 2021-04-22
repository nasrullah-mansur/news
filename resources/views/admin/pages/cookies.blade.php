@extends('layouts.admin')
@section('css_plugin')
@include('components.summernote_css')
@endsection
@section('content')
<form action="{{ route('page.cookies.update') }}" method="POST">
    @csrf
    <div class="card-content">
        <div class="card-body">
            <div class="form-group">
                <label for="pl_title">SEO Title (PL)</label>
                <input type="text" id="pl_title" class="form-control {{ $errors->has('pl_title') ? 'is-invalid' : '' }}" placeholder="SEO Title (PL)" name="pl_title" value="{{ $page->pl_title }}">
                @if($errors->has('pl_title'))
                <span class="text-danger"> - {{ $errors->first('pl_title') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="sl_title">SEO Title (SL)</label>
                <input type="text" id="sl_title" class="form-control {{ $errors->has('sl_title') ? 'is-invalid' : '' }}" placeholder="SEO Title (SL)" name="sl_title" value="{{ $page->sl_title }}">
                @if($errors->has('sl_title'))
                <span class="text-danger"> - {{ $errors->first('sl_title') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="pl_description">SEO description (PL)</label>
                <textarea id="pl_description" rows="5" class="form-control {{ $errors->has('pl_description') ? 'is-invalid' : '' }}" name="pl_description" placeholder="SEO description (PL)">{{ $page->pl_description }}</textarea>
                @if($errors->has('pl_description'))
                <span class="text-danger"> - {{ $errors->first('pl_description') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="sl_description">SEO description (SL)</label>
                <textarea id="sl_description" rows="5" class="form-control {{ $errors->has('sl_description') ? 'is-invalid' : '' }}" name="sl_description" placeholder="SEO description (SL)">{{ $page->sl_description }}</textarea>
                @if($errors->has('sl_description'))
                <span class="text-danger"> - {{ $errors->first('sl_description') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="pl_content">Page Content (PL)</label>
                <textarea id="pl_content" rows="5" class="form-control summernote " name="pl_content" placeholder="Page Content">{{ $page->pl_content }}</textarea>

            </div>

            <div class="form-group">
                <label for="sl_content">Page Content (SL)</label>
                <textarea id="sl_content" rows="5" class="form-control summernote" name="sl_content" placeholder="Page Content">{{ $page->sl_content }}</textarea>

            </div>

            <div class="form-actions">
                <button type="reset" class="btn btn-warning mr-1"><i class="ft-x"></i> Reset </button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save </button>
            </div>
        </div>
        </div>
</form>
@endsection

@section('js_plugin')
@include('components.summernote_js')
@endsection
