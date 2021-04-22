@extends('layouts.admin')

@section('content')
<section id="basic-form-layouts">
    <form action="{{ route('admin.breaking.update', $breaking_news->id) }}" method="POST">
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
                        <h4 class="form-section border-bottom mb-2 pb-1">Breaking News</h4>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="pl_breaking_news">Breaking News (PL)</label>
                            <input type="text" id="pl_breaking_news" class="form-control {{ $errors->has('pl_breaking_news') ? 'is-invalid' : '' }}" placeholder="News Headline (PL)" name="pl_breaking_news" value="{{ $breaking_news->pl_breaking_news }}">
                            @if ($errors->has('pl_breaking_news'))
                                <div class="invalid-feedback">{{ $errors->first('pl_breaking_news') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="sl_breaking_news">Breaking News (SL)</label>
                            <input type="text" id="sl_breaking_news" class="form-control {{ $errors->has('sl_breaking_news') ? 'is-invalid' : '' }}" placeholder="News Headline (SL)" name="sl_breaking_news" value="{{ $breaking_news->sl_breaking_news }}">
                            @if ($errors->has('sl_breaking_news'))
                                <div class="invalid-feedback">{{ $errors->first('sl_breaking_news') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="url">News URL</label>
                            <input type="text" id="url" class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" placeholder="News Headline (SL)" name="url" value="{{ $breaking_news->url }}">
                            @if ($errors->has('url'))
                                <div class="invalid-feedback">{{ $errors->first('url') }}</div>
                            @endif
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
                        <label>News Status</label>
                        <select class="form-control" name="status">
                            <option {{ $breaking_news->status == 1 ? 'selected' : '' }} value="1">Publish</option>
                            <option {{ $breaking_news->status == 2 ? 'selected' : '' }} value="2">Draft</option>
                            <option {{ $breaking_news->status == 3 ? 'selected' : '' }} value="3">Pending</option>
                        </select>
                        @if ($errors->has('status'))
                            <div class="invalid-feedback d-block">{{ $errors->first('status') }}</div>
                        @endif
                        </div>


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
