@extends('layouts.admin')

@section('content')
<section id="basic-form-layouts">
    <form action="{{ route('admin.wizard.update') }}" method="POST">
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
                        <h4 class="form-section border-bottom mb-2 pb-1">Home page</h4>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="trending_news_count">Trending News Count</label>
                            <input type="number" id="trending_news_count" class="form-control {{ $errors->has('trending_news_count') ? 'is-invalid' : '' }}" placeholder="Trending news count" name="trending_news_count" value="{{ $wizard->trending_news_count }}">
                            @if ($errors->has('trending_news_count'))
                                <div class="invalid-feedback">{{ $errors->first('trending_news_count') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="sport_news_count">Sport News Count</label>
                            <input type="number" id="sport_news_count" class="form-control {{ $errors->has('sport_news_count') ? 'is-invalid' : '' }}" placeholder="Sport news count" name="sport_news_count" value="{{ $wizard->sport_news_count }}">
                            @if ($errors->has('sport_news_count'))
                                <div class="invalid-feedback">{{ $errors->first('sport_news_count') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="entertainment_news_count">Entertainment News Count</label>
                            <input type="number" id="entertainment_news_count" class="form-control {{ $errors->has('entertainment_news_count') ? 'is-invalid' : '' }}" placeholder="Entertainment news count" name="entertainment_news_count" value="{{ $wizard->entertainment_news_count }}">
                            @if ($errors->has('entertainment_news_count'))
                                <div class="invalid-feedback">{{ $errors->first('entertainment_news_count') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="video_news_count">Video News Count</label>
                            <input type="number" id="video_news_count" class="form-control {{ $errors->has('video_news_count') ? 'is-invalid' : '' }}" placeholder="Video news count" name="video_news_count" value="{{ $wizard->video_news_count }}">
                            @if ($errors->has('video_news_count'))
                                <div class="invalid-feedback">{{ $errors->first('video_news_count') }}</div>
                            @endif
                            </div>
                        </div>

                    </div>
                        <h4 class="form-section border-bottom mb-2 mt-3 pb-1">Category page</h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="news_per_page">News Per Page</label>
                                <input type="number" id="news_per_page" class="form-control {{ $errors->has('news_per_page') ? 'is-invalid' : '' }}" placeholder="News per page" name="news_per_page" value="{{ $wizard->news_per_page }}">
                                @if ($errors->has('news_per_page'))
                                    <div class="invalid-feedback">{{ $errors->first('news_per_page') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="recent_news_count">Recent News Count</label>
                                <input type="number" id="recent_news_count" class="form-control {{ $errors->has('recent_news_count') ? 'is-invalid' : '' }}" placeholder="Recent news count" name="recent_news_count" value="{{ $wizard->recent_news_count }}">
                                @if ($errors->has('recent_news_count'))
                                    <div class="invalid-feedback">{{ $errors->first('recent_news_count') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="related_news_count">Related News Count</label>
                                <input type="number" id="related_news_count" class="form-control {{ $errors->has('related_news_count') ? 'is-invalid' : '' }}" placeholder="Related news count" name="related_news_count" value="{{ $wizard->related_news_count }}">
                                @if ($errors->has('related_news_count'))
                                    <div class="invalid-feedback">{{ $errors->first('related_news_count') }}</div>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-body">
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
    </form>
  </section>
@endsection

@section('custom_js')
@if(Session::has('update'))
<script>
    toastr.success("Successfully updated!", "WELL DONE");
</script>
@endif
@endsection

