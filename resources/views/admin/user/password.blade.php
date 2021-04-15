@extends('layouts.admin')

@section('content')
@section('content')
<section id="basic-form-layouts">
    <form action="{{ route('my.password.update') }}" method="POST" enctype="multipart/form-data">
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
                        <h4 class="form-section border-bottom mb-2 pb-1">News Headline</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="email">Your Email</label>
                                <input disabled type="text" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Your Email" name="email" value="{{ $user->email }}">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" id="current_password" class="form-control {{ $errors->has('current_password') ? 'is-invalid' : '' }}" placeholder="Current Password" name="current_password" >
                                @if ($errors->has('current_password'))
                                    <div class="invalid-feedback">{{ $errors->first('current_password') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" id="new_password" class="form-control {{ $errors->has('new_password') ? 'is-invalid' : '' }}" placeholder="New Password" name="new_password" >
                                @if ($errors->has('new_password'))
                                    <div class="invalid-feedback">{{ $errors->first('new_password') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Confirm Password" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Reset Password </button>
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
    </form>
  </section>
@endsection
@endsection
