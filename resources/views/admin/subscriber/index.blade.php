@extends('layouts.admin')
@section('css_plugin')
@include('components.datatable_css')
@include('components.summernote_css')
@endsection
@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Subscribers</h4>
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
                                        <th>Email</th>
                                        <th style="max-width: 220px;">Created At</th>
                                        <th style="max-width: 140px; text-align: center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Email</th>
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


<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Subscriber Section</h4>
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
                <div class="card-body">
                    <form action="{{ route('subscriber.section.update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="pl_title">Title (PL)</label>
                            <input type="text" id="pl_title" name="pl_title" class="form-control {{ $errors->has('pl_title') ? 'is-invalid' : '' }}" value="{{ $subscriber->pl_title }}">
                            @if ($errors->has('pl_title'))
                                <span class="text-danger"> - {{ $errors->first('pl_title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="sl_title">Title (SL)</label>
                            <input type="text" id="sl_title" name="sl_title" class="form-control {{ $errors->has('sl_title') ? 'is-invalid' : '' }}" value="{{ $subscriber->sl_title }}">
                            @if ($errors->has('sl_title'))
                                <span class="text-danger"> - {{ $errors->first('sl_title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pl_text">Text (PL)</label>
                            <textarea id="pl_text" name="pl_text" rows="5" class="form-control summernote {{ $errors->has('pl_text') ? 'is-invalid' : '' }}">{{ $subscriber->pl_text }}</textarea>
                            @if ($errors->has('pl_text'))
                                <span class="text-danger"> - {{ $errors->first('pl_text') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="sl_text">Text (SL)</label>
                            <textarea id="sl_text" name="sl_text" rows="5" class="form-control summernote {{ $errors->has('sl_text') ? 'is-invalid' : '' }}">{{ $subscriber->sl_text }}</textarea>
                            @if ($errors->has('sl_text'))
                                <span class="text-danger"> - {{ $errors->first('sl_text') }}</span>
                            @endif
                        </div>
                        <div class="form-actions">
                            <button type="reset" class="btn btn-warning mr-1">
                              <i class="ft-x"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                              <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('js_plugin')
@include('components.datatable_js')
@include('components.summernote_js')
@endsection

@section('custom_js')
<script>
let table = $(".datatable");
    table.DataTable({
        dom: "lBfrtip",
        processing: true,
        serverSide: true,
        ajax: "{{ route('subscriber.all') }}",
        columns: [
            { data: "DT_RowIndex", searchable: false },
            { data: "email" },
            { data: "created_at" },
            { data: "action" }
        ],
        createdRow: function (row) {
            $("td", row).eq(-1).addClass("text-center");
        },
        buttons: dataTableBtn('Subscribers '),
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
                        url: `/admin/subscriber/subscriber/${delteteDataId}/delete`,
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
