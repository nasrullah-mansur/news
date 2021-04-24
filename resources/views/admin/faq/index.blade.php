@extends('layouts.admin')

@section('css_plugin')
@include('components.sweetalert_css')
@endsection

@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="text-right">
                <a href="{{ route('admin.faq.create') }}" class="btn btn-primary btn-min-width mr-1 mb-1">Add New</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">frequently asked questions</h4>
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
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="card collapse-icon accordion-icon-rotate left" id="faqSection">
                            @foreach ($faqs as $faq)
                            <div id="headingCollapse{{ $faq->id }}" class="card-header">
                              <a data-toggle="collapse" href="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}" class="card-title text-capitalize lead collapsed">{{ $faq->pl_question . ' / ' . $faq->sl_question }}</a>
                            </div>
                            <div id="collapse{{ $faq->id }}" role="tabpanel" aria-labelledby="headingCollapse{{ $faq->id }}" class="collapse" aria-expanded="false" style="height: 0px;">
                              <div class="card-content">
                                <div class="card-body">
                                    <h4>Answer in PL</h4>
                                    <p>{!! $faq->pl_answer !!}</p>
                                    <h4>Answer in SL</h4>
                                    <p>{!! $faq->sl_answer !!}</p>
                                  <div>
                                      <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-secondary pl-1"><i class="edit-btn ft-edit"></i> edit</a>
                                      <a href="javascript:void(0);" class="btn btn-danger pl-1 delete-btn" data-id="{{ $faq->id }}"><i class="delete-btn ft-trash-2"></i> delete</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js_plugin')
@include('components.sweetalert_js')
@endsection

@section('custom_js')
<script>
    // DELETE DATA;
    document.getElementById('faqSection').addEventListener("click", function (e) {
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
                    location.replace(`/admin/faq/${delteteDataId}/destroy`);
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
