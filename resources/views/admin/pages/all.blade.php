
@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pages</h4>
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
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Page Name</th>
                  <th>Page Slug</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Index</td>
                  <td>
                      <code>/</code>
                  </td>
                  <td>
                      <a href="{{ route('page.index.edit') }}" class="btn btn-info">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Privacy & Policy</td>
                  <td>
                      <code>/privacy-policy</code>
                  </td>
                  <td>
                      <a href="{{ route('page.privacy_policy.edit') }}" class="btn btn-info">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Request for Add</td>
                  <td>
                      <code>/request-add</code>
                  </td>
                  <td>
                      <a href="{{ route('page.request_add.edit') }}" class="btn btn-info">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cookies</td>
                  <td>
                      <code>/cookies</code>
                  </td>
                  <td>
                      <a href="{{ route('page.cookies.edit') }}" class="btn btn-info">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Faq</td>
                  <td>
                      <code>/faq</code>
                  </td>
                  <td>
                      <a href="{{ route('page.faq.edit') }}" class="btn btn-info">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Contact</td>
                  <td>
                      <code>/contact</code>
                  </td>
                  <td>
                      <a href="{{ route('page.contact.edit') }}" class="btn btn-info">Edit</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
