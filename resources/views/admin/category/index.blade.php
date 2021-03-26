@extends('layouts.admin')
        @section('css_plugin')
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/tables/datatable/datatables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/extensions/sweetalert.css') }}">
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
                                                <th>Name</th>
                                                <th>Name</th>
                                                <th>slug</th>
                                                <th style="max-width: 220px;">Created At</th>
                                                <th style="max-width: 140px; text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Name</th>
                                                <th>slug</th>
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
        <div class="modal fade text-left" id="add_category" tabindex="-1" role="dialog" aria-labelledby="add_category_area" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-primary white">
                    <h3 class="modal-title" id="add_category_area"> Add Category</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <form action="{{ route('categories.store') }}" method="POST"> -->
                <form>
                    <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <label for="name">Category Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Category Name">
                        <div class="name_error">
                            
                        </div>
                    </fieldset>
                    <br>
                    </div>
                    <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                    value="close">
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
                <!-- <form action="{{ route('categories.store') }}" method="POST"> -->
                <form>
                    <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <label for="edit_name">Category Name</label>
                        <input name="name" type="text" class="form-control" id="edit_name" placeholder="Category Name">
                        <div class="name_error">
                            
                        </div>
                        <input type="hidden" name="id" id="edit_id">
                    </fieldset>
                    <br>
                    </div>
                    <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                    value="close">
                    <button type="submit" id="update_category_btn" class="btn btn-outline-primary btn-lg add-category">Update Category</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- EDIT & UPDATE CATEGORY MODEL -->
        @endsection

        @section('js_plugin')
        <script src="{{ asset('admin/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.buttons.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/tables/jszip.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/tables/pdfmake.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/tables/vfs_fonts.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/tables/buttons.html5.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/tables/buttons.print.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/tables/buttons.colVis.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
        @endsection

        @section('custom_js')
        <script>
            // INDEX SHOW;
            let table = $(".datatable");
            table.DataTable({
                dom: "Bfrtip",
                processing: true,
                serverSide: true,
                ajax: "{{ route('categories.get') }}",
                columns: [
                    { data: "DT_RowIndex", searchable: false }, 
                    { data: "name" }, 
                    { data: "slug" }, 
                    { data: "created_at" }, 
                    { data: "action" }
                ],
                createdRow: function (row) {
                    $("td", row).eq(-1).addClass("text-center");
                },
            });
        
            // STORE DATA;
            $("#add_category_btn").on("click", function (e) {
                e.preventDefault();
                let formData = {
                    name: $('#add_category input[name="name"]').val(),
                };
                $.ajax({
                    type: "POST",
                    url: "{{ route('categories.store') }}",
                    data: formData,
                    success: function () {
                        table.DataTable().ajax.reload();
                        $("#add_category").modal("hide");
                        toastr.success("Category successfully added!", "WELL DONE");
                    },
                    error: function (error) {
                        $(`<span class="invalid-massage danger">${error.responseJSON.errors.name[0]}</span>`).insertAfter('#add_category input[name="name"]');
                    },
                });
            });

            // EDIT DATA;
            table[0].addEventListener("click", function (e){
                e.preventDefault();
                if (e.target.classList.contains("edit-btn")) {
                    let editDataId = e.target.getAttribute("data-id");
                    $.ajax({
                        type: 'GET',
                        url: `/admin/category/${editDataId}`,
                        success: function(data){
                            document.getElementById('edit_name').value = data.name;
                            document.getElementById('edit_id').value = data.id;
                        }
                    });
                }
            });

            // UPDATE;
            $('#update_category_btn').on('click', function(e) {
                e.preventDefault();
                let updateData = {
                    name: $('#edit_category input[name="name"]').val(),
                    id: $('#edit_category input[name="id"]').val(),
                };
                $.ajax({
                    type: 'POST',
                    url: `/admin/category/${updateData.id}/update`,
                    data: updateData,
                    success: function() {
                        table.DataTable().ajax.reload();
                        $("#edit_category").modal("hide");
                        toastr.success("Category successfully updated!", "WELL DONE");
                    },
                    error: function (error) {
                        $(`<span class="invalid-massage danger">${error.responseJSON.errors.name[0]}</span>`).insertAfter('#edit_category input[name="name"]');
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
                                url: `/admin/category/${delteteDataId}/delete`,
                                success: function(){
                                    console.log('ok')
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
                            
                            return;
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
