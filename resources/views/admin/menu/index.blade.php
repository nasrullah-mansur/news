@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Manus</h4>
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
        <div class="card-content collapse show" style="">

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th style="margin-left: auto;">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Main Menu</td>
                  <td style="margin-left: auto;">
                    <a class="btn btn-secondary edit-btn" href="{{ route('menu.mainMenu.edit') }}"><i class="edit-btn ft-edit"></i> Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Footer Menu</td>
                  <td style="margin-left: auto;">
                    <a class="btn btn-secondary edit-btn" href="{{ route('menu.footerMenu.edit') }}"><i class="edit-btn ft-edit"></i> Edit</a>
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
