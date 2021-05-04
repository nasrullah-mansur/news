@extends('layouts.admin')
@section('content')
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-md-3 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
          <div class="card-header border-0">
            <div class="card-title text-center">

            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
              <span>Login with Newsly</span>
            </h6>
          </div>
          <div class="card-content">
            <div class="card-body">
              <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}">
                @csrf
                <fieldset class="form-group position-relative has-icon-left mb-0">
                  <input type="text" class="form-control form-control-lg {{ $errors->has('email') || $errors->has('password') ? 'is-invalid' : '' }}" name="email" placeholder="Your Email" required>
                  <div class="form-control-position">
                    <i class="ft-mail"></i>
                  </div>
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="password" class="form-control form-control-lg {{ $errors->has('email') || $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="Enter Password"
                  required>
                  <div class="form-control-position">
                    <i class="fa fa-key"></i>
                  </div>
                  @if ($errors->has('email') || $errors->has('password'))
                    <small class="text-danger"> - Email or Password does'nt match.</small>
                @endif
                </fieldset>


                <div class="form-group row">
                  <div class="col-md-6 col-12 text-center text-md-left">
                    <fieldset>
                      <input name="remember" type="checkbox" id="remember-me" class="chk-remember">
                      <label for="remember-me"> Remember Me</label>
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-12 text-center text-md-right"><a href="{{ route('password.request') }}" class="card-link">Forgot Password?</a></div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
