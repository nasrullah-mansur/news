@extends('layouts.admin')
@section('css_plugin')
@include('components.datatable_css')
@endsection
@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="text-right">
                <a href="#" data-toggle="modal" data-target="#add_user" class="btn add-user btn-primary btn-min-width mr-1 mb-1">Add User</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User</h4>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Join At</th>
                                        <th style="text-align: center; max-width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Join At</th>
                                        <th style="text-align: center; max-width: 120px;">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADD USER MODEL -->
<div class="modal fade text-left" id="add_user" tabindex="-1" role="dialog" aria-labelledby="add_user_area" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary white">
            <h3 class="modal-title" id="add_user_area"> Add New User</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form>
            <div class="modal-body">
            <fieldset class="form-group floating-label-form-group">
                <label for="name">User Full Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Full Name">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="email">User Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email address">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="password">User Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="password_confirmation">User Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                <div class="invalid-feedback"></div>
            </fieldset>
            <br>
            </div>
            <div class="modal-footer">
            <input type="reset" class="btn btn-outline-secondary btn-lg" value="Reset">
            <button type="button" id="add_user_btn" class="btn btn-outline-primary btn-lg add-category">Add Category</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- ADD USER MODEL -->

@endsection

@section('js_plugin')
@include('components.datatable_js')
@endsection

@section('custom_js')
<script>
    let table = $(".datatable");
    table.DataTable({
        dom: "Bfrtip",
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.GetUsers') }}",
        columns: [
            { data: "DT_RowIndex", searchable: false },
            { data: "name" },
            { data: "email" },
            { data: "created_at" },
            { data: "action" },
        ],
        createdRow: function (row) {
            $("td", row).eq(-1).addClass("text-center");
        },
    });

        // STORE DATA;
        $("#add_user_btn").on("click", function (e) {
        e.preventDefault();
        let AddUserModal = $('#add_user');

        let FormElements = {
            name: AddUserModal.find('input[name="name"]')[0],
            email: AddUserModal.find('input[name="email"]')[0],
            password: AddUserModal.find('input[name="password"]')[0],
            password_confirmation: AddUserModal.find('input[name="password_confirmation"]')[0],
        }
        let FormData = {
            name: FormElements.name.value,
            email: FormElements.email.value,
            password: FormElements.password.value,
            password_confirmation: FormElements.password_confirmation.value,
        };
        let DataErrors = {
            name: FormElements.name.nextElementSibling,
            email: FormElements.email.nextElementSibling,
            password: FormElements.password.nextElementSibling,
            password_confirmation: FormElements.password_confirmation.nextElementSibling,
        }
        $.ajax({
            type: "POST",
            url: "{{ route('new.user.store') }}",
            data: FormData,
            success: function () {
                AddUserModal.find('form')[0].reset();
                table.DataTable().ajax.reload();
                AddUserModal.modal("hide");
                toastr.success("New user successfully added!", "WELL DONE");
            },
            error: function (error) {
                console.log(error);
                if(error.responseJSON.errors.name){
                    DataErrors.name.innerHTML = error.responseJSON.errors.name[0];
                }
                if(error.responseJSON.errors.email){
                    DataErrors.email.innerHTML = error.responseJSON.errors.email[0];
                }
                if(error.responseJSON.errors.password) {
                    DataErrors.password.innerHTML = error.responseJSON.errors.password[0];
                }
                Object.keys(FormElements).forEach(key => {
                    if(FormElements[key].nextElementSibling.innerHTML != '') {
                        FormElements[key].classList.add('is-invalid');
                    }
                });
            },
        });
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
                        url: `/admin/user/${delteteDataId}/delete`,
                        success: function(){
                            swal({
                                icon: "success",
                                title: "Deleted!",
                                text: "Your imaginary file has been deleted.",
                                timer: 2000,
                                showConfirmButton: true,
                            });
                            table.DataTable().ajax.reload();
                        }
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
