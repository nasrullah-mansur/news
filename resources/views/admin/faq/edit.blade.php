@extends('layouts.admin')
@section('css_plugin')
@include('components.summernote_css')
@endsection
@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">FAQ</h4>
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
                <div class="card-body">
                    <form action="{{ route('admin.faq.update', $faq->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="pl_question">Question (PL)</label>
                            <input type="text" id="pl_question" name="pl_question" class="form-control {{ $errors->has('pl_question') ? 'is-invalid' : '' }}" placeholder="Question" value="{{ $faq->pl_question }}">
                            @if ($errors->has('pl_question'))
                                <span class="text-danger"> - {{ $errors->first('pl_question') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="sl_question">Question (SL)</label>
                            <input type="text" id="sl_question" name="sl_question" class="form-control {{ $errors->has('sl_question') ? 'is-invalid' : '' }}" placeholder="Question" value="{{ $faq->sl_question }}">
                            @if ($errors->has('sl_question'))
                                <span class="text-danger"> - {{ $errors->first('sl_question') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pl_answer">Answer (PL)</label>
                            <textarea id="pl_answer" name="pl_answer" rows="5" class="form-control summernote {{ $errors->has('pl_answer') ? 'is-invalid' : '' }}" placeholder="Answer">{!! $faq->pl_answer !!}</textarea>
                            @if ($errors->has('pl_answer'))
                                <span class="text-danger"> - {{ $errors->first('pl_answer') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="sl_answer">Answer (SL)</label>
                            <textarea id="sl_answer" name="sl_answer" rows="5" class="form-control summernote {{ $errors->has('sl_answer') ? 'is-invalid' : '' }}" placeholder="Answer">{!! $faq->sl_answer !!}</textarea>
                            @if ($errors->has('sl_answer'))
                                <span class="text-danger"> - {{ $errors->first('sl_answer') }}</span>
                            @endif
                        </div>
                        <div class="form-actions">
                            <button type="reset" class="btn btn-warning mr-1">
                              <i class="ft-x"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                              <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js_plugin')
@include('components.summernote_js')
@endsection
