@extends('layouts.admin')
@section('css_plugin')
@include('components.datatable_css')
@endsection
@section('content')
<section>
    <div class="row">
        <div class="col-12">
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
                                        <th>Email</th>
                                        <th>Phone</th>
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
                                        <th>Email</th>
                                        <th>Phone</th>
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
        ajax: "{{ route('admin.comment.all') }}",
        columns: [
            { data: "DT_RowIndex", searchable: false },
            { data: "name" },
            { data: "email" },
            { data: "phone" },
            { data: "created_at" },
            { data: "action" }
        ],
        createdRow: function (row) {
            $("td", row).eq(-1).addClass("text-center");
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
                        url: `/admin/comment/comment/${delteteDataId}/delete`,
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
