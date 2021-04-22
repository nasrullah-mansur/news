@extends('layouts.admin')
@section('css_plugin')
@include('components.datatable_css')
@endsection
@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="text-right">
                <a href="#" data-toggle="modal" data-target="#add_social" class="btn btn-primary btn-min-width mr-1 mb-1">Add Social</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Categories</h4>
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
                                        <th>Link</th>
                                        <th>Icon Class</th>
                                        <th>Followers</th>
                                        <th style="max-width: 220px;">Created At</th>
                                        <th style="max-width: 140px; text-align: center;">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Link</th>
                                        <th>Icon Class</th>
                                        <th>Followers</th>
                                        <th style="max-width: 220px;">Created At</th>
                                        <th style="max-width: 140px; text-align: center;">Actions</th>
                                    </tr>

                                </tfoot>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ADD CATEGORY MODEL -->
<div class="modal fade text-left" id="add_social" tabindex="-1" role="dialog" aria-labelledby="add_social_area" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary white">
            <h3 class="modal-title" id="add_social_area"> Add Social</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form>
            <div class="modal-body">
            <fieldset class="form-group floating-label-form-group">
                <label for="social_name">Social Name</label>
                <input name="social_name" type="text" class="form-control" id="social_name" placeholder="Social Name">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="social_link">Social Link</label>
                <input name="social_link" type="text" class="form-control" id="social_link" placeholder="Social Link">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="icon_class">Icon Class</label>
                <input name="icon_class" type="text" class="form-control" id="icon_class" placeholder="Icon Class">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="followers">Followers</label>
                <input name="followers" type="text" class="form-control" id="followers" placeholder="Followers">
                <div class="invalid-feedback"></div>
            </fieldset>
            <br>
            </div>
            <div class="modal-footer">
            <input type="reset" class="btn btn-outline-secondary btn-lg" value="Reset">
            <button type="submit" id="add_social_btn" class="btn btn-outline-primary btn-lg add-category">Add Social</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- ADD CATEGORY MODEL -->

<!-- EDIT & UPDATE CATEGORY MODEL -->
<div class="modal fade text-left" id="edit_social" tabindex="-1" role="dialog" aria-labelledby="edit_social_area" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary white">
            <h3 class="modal-title" id="edit_social_area"> Update Social</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form>
            <div class="modal-body">
                <fieldset class="form-group floating-label-form-group">
                    <label for="social_name_update">Social Name</label>
                    <input name="social_name" type="text" class="form-control" id="social_name_update" placeholder="Social Name">
                    <div class="invalid-feedback"></div>
                </fieldset>
                <fieldset class="form-group floating-label-form-group">
                    <label for="social_link_update">Social Link</label>
                    <input name="social_link" type="text" class="form-control" id="social_link_update" placeholder="Social Link">
                    <div class="invalid-feedback"></div>
                </fieldset>
                <fieldset class="form-group floating-label-form-group">
                    <label for="icon_class_update">Icon Class</label>
                    <input name="icon_class" type="text" class="form-control" id="icon_class_update" placeholder="Icon Class">
                    <div class="invalid-feedback"></div>
                </fieldset>
                <fieldset class="form-group floating-label-form-group">
                    <label for="followers_update">Followers</label>
                    <input name="followers" type="text" class="form-control" id="followers_update" placeholder="Followers">
                    <div class="invalid-feedback"></div>
                </fieldset>
            <br>
            <fieldset class="form-group floating-label-form-group">
                <input type="hidden" name="id" value="">
                <div class="invalid-feedback"></div>
            </fieldset>

            </div>
            <div class="modal-footer">
            <input type="reset" class="btn btn-outline-secondary btn-lg" value="Reset">
            <button type="submit" id="update_social_btn" class="btn btn-outline-primary btn-lg add-category">Update Social</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- EDIT & UPDATE CATEGORY MODEL -->
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
            ajax: "{{ route('admin.social.all') }}",
            columns: [
                { data: "DT_RowIndex", searchable: false },
                { data: "social_name" },
                { data: "social_link" },
                { data: "icon_class" },
                { data: "followers" },
                { data: "created_at" },
                { data: "action" }
            ],
            createdRow: function (row) {
                $("td", row).eq(-1).addClass("text-center");
            },
        });


        // STORE DATA;
        $("#add_social_btn").on("click", function (e) {
        let AddSocialModal = $('#add_social');
        e.preventDefault();
        let FormElements = {
            social_name: AddSocialModal.find('input[name="social_name"]')[0],
            social_link: AddSocialModal.find('input[name="social_link"]')[0],
            icon_class: AddSocialModal.find('input[name="icon_class"]')[0],
            followers: AddSocialModal.find('input[name="followers"]')[0],
        }
        let FormData = {
            social_name: FormElements.social_name.value,
            social_link: FormElements.social_link.value,
            icon_class: FormElements.icon_class.value,
            followers: FormElements.followers.value,
        };
        let DataErrors = {
            social_name: FormElements.social_name.nextElementSibling,
            social_link: FormElements.social_link.nextElementSibling,
            icon_class: FormElements.icon_class.nextElementSibling,
            followers: FormElements.followers.nextElementSibling,
        }
        $.ajax({
            type: "POST",
            url: "{{ route('admin.social.store') }}",
            data: FormData,
            success: function () {
                AddSocialModal.find('form')[0].reset();
                table.DataTable().ajax.reload();
                AddSocialModal.modal("hide");
                toastr.success("Social successfully added!", "WELL DONE");
            },
            error: function (error) {
                console.log(error);
                if(error.responseJSON.errors.social_name){
                    DataErrors.social_name.innerHTML = error.responseJSON.errors.social_name[0];
                }
                if(error.responseJSON.errors.social_link) {
                    DataErrors.social_link.innerHTML = error.responseJSON.errors.social_link[0];
                }
                if(error.responseJSON.errors.icon_class) {
                    DataErrors.icon_class.innerHTML = error.responseJSON.errors.icon_class[0];
                }
                Object.keys(FormElements).forEach(key => {
                    if(FormElements[key].nextElementSibling.innerHTML != '') {
                        FormElements[key].classList.add('is-invalid');
                    }
                });
            },
        });
    });

    // EDIT DATA;
    let EditModal = $('#edit_social');
    let EditFormElements = {
            social_name: EditModal.find('input[name="social_name"]')[0],
            social_link: EditModal.find('input[name="social_link"]')[0],
            icon_class: EditModal.find('input[name="icon_class"]')[0],
            followers: EditModal.find('input[name="followers"]')[0],
            id: EditModal.find('input[name="id"]')[0],
        }

    table[0].addEventListener("click", function (e){
        e.preventDefault();
        if (e.target.classList.contains("edit-btn")) {
            $('.invalid-feedback').text('');
            $('.is-invalid').removeClass('is-invalid');
            let editDataId = e.target.getAttribute("data-id");
            $.ajax({
                type: 'GET',
                url: `/admin/socials/edit/${editDataId}`,
                success: function(data){
                    EditFormElements.social_name.value = data.social_name;
                    EditFormElements.social_link.value = data.social_link;
                    EditFormElements.icon_class.value = data.icon_class;
                    EditFormElements.followers.value = data.followers;
                    EditFormElements.id.value = data.id;
                }
            });
        }
    });

    // UPDATE;
    $('#update_social_btn').on('click', function(e) {
    e.preventDefault();
    let UpdateFormData = {
        social_name: EditFormElements.social_name.value,
        social_link: EditFormElements.social_link.value,
        icon_class: EditFormElements.icon_class.value,
        followers: EditFormElements.followers.value,
        id: EditFormElements.id.value,
    };
    let UpdateDataErrors = {
        social_name: EditFormElements.social_name.nextElementSibling,
        social_link: EditFormElements.social_link.nextElementSibling,
        icon_class: EditFormElements.icon_class.nextElementSibling,
        followers: EditFormElements.icon_class.nextElementSibling,
    }
    $.ajax({
        type: 'POST',
        url: `{{ route('admin.social.update') }}`,
        data: UpdateFormData,
        success: function() {
            table.DataTable().ajax.reload();
            EditModal.find('form')[0].reset();
            EditModal.modal("hide");
            toastr.success("Social successfully updated!", "WELL DONE");
        },
        error: function (error) {
            console.log(error);
            if(error.responseJSON.errors.social_name){
                UpdateDataErrors.social_name.innerHTML = error.responseJSON.errors.social_name[0];
            }
            if(error.responseJSON.errors.social_link) {
                UpdateDataErrors.social_link.innerHTML = error.responseJSON.errors.social_link[0];
            }
            if(error.responseJSON.errors.icon_class) {
                UpdateDataErrors.icon_class.innerHTML = error.responseJSON.errors.icon_class[0];
            }

            Object.keys(EditFormElements).forEach(key => {
                if(EditFormElements[key].nextElementSibling.innerHTML != '') {
                    EditFormElements[key].classList.add('is-invalid');
                }
            });
        },
    });
    })


// DELETE DATA;
table[0].addEventListener("click", function (e) {
        e.preventDefault();
        if (e.target.classList.contains("delete-btn")) {
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
                        url: `/admin/socials/${delteteDataId}/delete`,
                        success: function(response){
                            console.log(response);
                            if(response == 'category has news') {
                                swal({
                                    icon: "error",
                                    title: "Sorry!",
                                    text: "This Category has news",
                                    showConfirmButton: true,
                                });
                            } else {
                                swal({
                                    icon: "success",
                                    title: "Deleted!",
                                    text: "Your imaginary file has been deleted.",
                                    timer: 2000,
                                    showConfirmButton: true,
                                });
                                table.DataTable().ajax.reload();
                            }

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
