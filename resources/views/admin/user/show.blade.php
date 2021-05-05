@extends('layouts.admin')
@section('css_plugin')
@include('components.datatable_css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/users.css') }}">
@endsection
@section('content')
<div id="user-profile">
    <div class="row">
      <div class="col-12">
        <div class="card profile-with-cover">
          <div class="card-img-top img-fluid bg-cover height-300" style="background: url('{{ $user->profile->banner == null ? asset('admin/images/carousel/22.jpg') : asset($user->profile->banner) }}') 50%;"></div>
          <div class="media profil-cover-details w-100">
            <div class="media-left pl-2 pt-2">
              <a href="#" class="profile-image">
                <img src="{{ $user->profile->profile == null ? asset('admin/images/portrait/small/avatar-s-8.png') : asset($user->profile->profile) }}" class="rounded-circle img-border height-100"
                alt="Card image">
              </a>
            </div>
            <div class="media-body pt-3 px-2">
              <div class="row">
                <div class="col-md-4">
                  <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="col-md-8 text-right">
                  <div class="d-none d-md-flex float-right ml-2" role="group" aria-label="Basic example">
                    <a href="{{ $user->profile->facebook }}" target="_blank" class="btn btn-success" style="margin-left: 5px;"><i class="fa fa-facebook-f"></i> <span class="d-none d-lg-inline-block">Facebook</span></a>
                    <a href="{{ $user->profile->twitter }}" target="_blank" class="btn btn-success" style="margin-left: 5px;"><i class="fa fa-twitter"></i> <span class="d-none d-lg-inline-block">Twitter</span></a>
                    <a href="{{ $user->profile->linkedin }}" target="_blank" class="btn btn-success" style="margin-left: 5px;"><i class="fa fa-linkedin"></i> <span class="d-none d-lg-inline-block">Linkedin</span></a>
                    <a href="{{ route('my.profile.edit', $user->id ) }}" class="btn btn-success" style="margin-left: 5px;"><i class="fa fa-edit"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav class="navbar navbar-light navbar-profile align-self-end">
            <nav class="navbar navbar-expand-lg">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <span>Join at 12-12-1995 09:30 PM</span>
                  </li>
                </ul>
              </div>
        </div>
        </nav>
      </div>

      @if(Session::get('role') == 'web')
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">News by <span class="text-danger">{{ $user->name }}</span></h4>
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
                <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Headlines (ML)</th>
                                    <th>Headlines (SL)</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Created At</th>
                                    <th style=" text-align: center;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Headlines (ML)</th>
                                    <th>Headlines (SL)</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Created At</th>
                                    <th style=" text-align: center;">Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                </div>
            </div>
        </div>
      </div>
      @endif
    </div>
  </div>
@endsection

@if(Session::get('role') == 'web')

@section('js_plugin')
@include('components.datatable_js')
@endsection
@section('custom_js')
<script>
    // INDEX DATA;
    let table = $(".datatable");
    let id = "{{ $user->id }}";
    table.DataTable({
        dom: "Bfrtip",
        processing: true,
        serverSide: true,
        ajax: `/admin/author/${id}/news`,
        columns: [
            { data: "DT_RowIndex", searchable: false },
            { data: "image" },
            { data: "pl_headline" },
            { data: "sl_headline" },
            { data: "category" },
            { data: "author" },
            { data: "created_at" },
            { data: "action" },
        ],
        createdRow: function (row) {
            $("td", row).eq(-1).addClass("d-flex");
        },
    });


    // DELETE DATA;
    table[0].addEventListener("click", function (e) {
        if (e.target.classList.contains("delete-btn")) {
        e.preventDefault();
            let delteteDataId = e.target.getAttribute("data-id");
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                icon: "warning",
                showCancelButton: true,
                buttons: {
                    cancel: {
                        text: "No, cancel please!",
                        value: null,
                        visible: true,
                        className: "btn-warning",
                        closeModal: false,
                    },
                    confirm: {
                        text: "Yes, delete it!",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: false,
                    },
                },
            }).then((isConfirm) => {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: `news/${delteteDataId}/delete`,
                        success: function(){
                            swal({
                                icon: "success",
                                title: "Deleted!",
                                text: "Your imaginary file has been deleted.",
                                timer: 2000,
                                showConfirmButton: true,
                            });
                            table.DataTable().ajax.reload();
                        },
                    });
                } else {
                    swal({
                        icon: "error",
                        title: "Cancelled!",
                        text: "Your imaginary file is safe :",
                        timer: 2000,
                        showConfirmButton: true,
                    });
                }
            });
        }
    });
</script>
@endsection

@endif
