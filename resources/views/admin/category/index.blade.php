@extends('layouts.admin')
@section('css_plugin')
@include('components.datatable_css')
@include('components.select_2_css')
@endsection
@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="text-right">
                <a href="#" data-toggle="modal" data-target="#add_category" class="btn btn-primary btn-min-width mr-1 mb-1">Add Category</a>
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
                                        <th>Name (ML)</th>
                                        <th>Name (SL)</th>
                                        <th>News Count</th>
                                        <th style="max-width: 220px;">Created At</th>
                                        <th style="max-width: 220px;">Created By</th>
                                        <th style="max-width: 140px; text-align: center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name (ML)</th>
                                        <th>Name (SL)</th>
                                        <th>News Count</th>
                                        <th style="max-width: 220px;">Created At</th>
                                        <th style="max-width: 220px;">Created By</th>
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
<div class="modal fade text-left" id="add_category" tabindex="-1" role="dialog" aria-labelledby="add_category_area" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary white">
            <h3 class="modal-title" id="add_category_area"> Add Category</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form>
            <div class="modal-body">
            <fieldset class="form-group floating-label-form-group">
                <label for="pl_name">Category Name (PL)</label>
                <input name="pl_name" type="text" class="form-control" id="pl_name" placeholder="Category Name (PL)">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="sl_name">Category Name (SL)</label>
                <input name="sl_name" type="text" class="form-control" id="sl_name" placeholder="Category Name (SL)">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="sl_name">Category Under</label>
                <select class="select2 form-control" name="p_id">

                  </select>
            </fieldset>
            <br>
            </div>
            <div class="modal-footer">
            <input type="reset" class="btn btn-outline-secondary btn-lg" value="Reset">
            <button type="submit" id="add_category_btn" class="btn btn-outline-primary btn-lg add-category">Add Category</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- ADD CATEGORY MODEL -->

<!-- EDIT & UPDATE CATEGORY MODEL -->
<div class="modal fade text-left" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="edit_category_area" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary white">
            <h3 class="modal-title" id="edit_category_area"> Update Category</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form>
            <div class="modal-body">
            <fieldset class="form-group floating-label-form-group">
                <label for="pl_name_update">Category Name (PL)</label>
                <input name="pl_name" type="text" class="form-control" id="pl_name_update" placeholder="Category Name (PL)">
                <div class="invalid-feedback"></div>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <label for="sl_name_update">Category Name (SL)</label>
                <input name="sl_name" type="text" class="form-control" id="sl_name_update" placeholder="Category Name (SL)">
                <div class="invalid-feedback"></div>
            </fieldset>

            <br>
            <fieldset class="form-group floating-label-form-group">
                <label for="sl_name">Category Under</label>
                <select class="form-control select2" name="p_id">
                    <option value="0">No Subcategory</option>
                </select>
            </fieldset>
            <fieldset class="form-group floating-label-form-group">
                <input type="hidden" name="id" value="">
                <div class="invalid-feedback"></div>
            </fieldset>

            </div>
            <div class="modal-footer">
            <input type="reset" class="btn btn-outline-secondary btn-lg" value="Reset">
            <button type="submit" id="update_category_btn" class="btn btn-outline-primary btn-lg add-category">Update Category</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- EDIT & UPDATE CATEGORY MODEL -->
@endsection

@section('js_plugin')
@include('components.datatable_js')
@include('components.select_2_js')
@endsection

@section('custom_js')
@section('custom_js')
<script>
    $(".select2, .select3").select2({
        placeholder: "Select Category",
        allowClear: true,
    });
    $(".select3").select2({
        placeholder: "Select Category",
        allowClear: true,
    });
</script>
<script>


    // Get Categories;
    $.ajax({
        type: "GET",
        url: "{{ route('categories.get.main') }}",
        data: FormData,
        success: function (data) {
            let pId = $('select[name="p_id"]');
            data.forEach(function(dataId) {
                let Options = `<option value="${dataId.id}">${dataId.pl_name} / ${dataId.sl_name}</option> `;
                pId.append(Options);
            })
        },
        error: function (error) {

        },
    });




    // INDEX DATA;
    let table = $(".datatable");
    table.DataTable({
        dom: "lBfrtip",
        processing: true,
        serverSide: true,
        ajax: "{{ route('categories.get') }}",
        columns: [
            { data: "DT_RowIndex", searchable: false },
            { data: "pl_name" },
            { data: "sl_name" },
            { data: "news_count" },
            { data: "created_at" },
            { data: "created_by" },
            { data: "action" }
        ],
        createdRow: function (row) {
            $("td", row).eq(-1).addClass("text-center");
        },
        buttons: dataTableBtn('Category '),
    });

    // STORE DATA;
    $("#add_category_btn").on("click", function (e) {
        e.preventDefault();
        let AddCategoryModal = $('#add_category');
        let FormElements = {
            pl_name: AddCategoryModal.find('input[name="pl_name"]')[0],
            sl_name: AddCategoryModal.find('input[name="sl_name"]')[0],
            p_id: AddCategoryModal.find('select[name="p_id"]')[0],
        }
        let FormData = {
            pl_name: FormElements.pl_name.value,
            sl_name: FormElements.sl_name.value,
            p_id: FormElements.p_id.value,
        };
        let DataErrors = {
            pl_name: FormElements.pl_name.nextElementSibling,
            sl_name: FormElements.sl_name.nextElementSibling,
        }
        $.ajax({
            type: "POST",
            url: "{{ route('categories.store') }}",
            data: FormData,
            success: function () {
                AddCategoryModal.find('form')[0].reset();
                table.DataTable().ajax.reload();
                AddCategoryModal.modal("hide");
                toastr.success("Category successfully added!", "WELL DONE");
            },
            error: function (error) {
                console.log(error);
                if(error.responseJSON.errors.pl_name){
                    DataErrors.pl_name.innerHTML = error.responseJSON.errors.pl_name[0];
                }
                if(error.responseJSON.errors.sl_name) {
                    DataErrors.sl_name.innerHTML = error.responseJSON.errors.sl_name[0];
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
    let EditModal = $('#edit_category');
    let EditFormElements = {
        pl_name: EditModal.find('input[name="pl_name"]')[0],
        sl_name: EditModal.find('input[name="sl_name"]')[0],
        p_id: EditModal.find('select[name="p_id"]')[0],
        id: EditModal.find('input[name="id"]')[0],
    }
    table[0].addEventListener("click", function (e){
        if (e.target.classList.contains("edit-btn")) {
        e.preventDefault();
            $('.invalid-feedback').text('');
            $('.is-invalid').removeClass('is-invalid');
            let editDataId = e.target.getAttribute("data-id");
            $.ajax({
                type: 'GET',
                url: `/admin/category/${editDataId}`,
                success: function(data){
                    EditFormElements.pl_name.value = data.pl_name;
                    EditFormElements.sl_name.value = data.sl_name;
                    EditFormElements.id.value = data.id;


                    EditFormElements.p_id.value = data.p_id;

                   $('#edit_category .select2').val(data.p_id);
                     $('#edit_category .select2').select2().trigger('change');


                }
            });
        }
    });

    // UPDATE;
    $('#update_category_btn').on('click', function(e) {
        e.preventDefault();
        let UpdateFormData = {
            pl_name: EditFormElements.pl_name.value,
            sl_name: EditFormElements.sl_name.value,
            p_id: EditFormElements.p_id.value,
            id: EditFormElements.id.value,
        };
        let UpdateDataErrors = {
            pl_name: EditFormElements.pl_name.nextElementSibling,
            sl_name: EditFormElements.sl_name.nextElementSibling,
        }

        $.ajax({
            type: 'POST',
            url: `{{ route('admin.category.update') }}`,
            data: UpdateFormData,
            success: function() {
                table.DataTable().ajax.reload();
                EditModal.find('form')[0].reset();
                EditModal.modal("hide");
                toastr.success("Category successfully updated!", "WELL DONE");
            },
            error: function (error) {
                console.log(error);
                if(error.responseJSON.errors.pl_name){
                    UpdateDataErrors.pl_name.innerHTML = error.responseJSON.errors.pl_name[0];
                }
                if(error.responseJSON.errors.sl_name) {
                    UpdateDataErrors.sl_name.innerHTML = error.responseJSON.errors.sl_name[0];
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
                        url: `/admin/category/${delteteDataId}/delete`,
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
