@extends('layouts.admin')

@section('content')
<section id="form-repeater">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" id="repeat-form">Main Menu</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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
            <div class="card-body">
              <div class="repeater-default">
                  <form action="{{ route('menu.mainMenu.update') }}" method="POST">
                    @csrf

                    @if(!empty($errors->all()))
                    <div class="mb-2">
                    <span class="text-danger"> - Something wrong. Please fill up all fields before save.</span>
                </div>
                @endif

                <div data-repeater-list="main_menu">
                    @foreach ($menu_items as $menu_item)
                    <div data-repeater-item>
                      <div class="form row">
                        <div class="form-group mb-1 col-sm-12 col-md-3">
                          <label>PL Label</label>
                          <input type="text" name="pl_label" class="form-control" placeholder="PL Label" value="{{ $menu_item->pl_label }}">

                        </div>

                        <div class="form-group mb-1 col-sm-12 col-md-3">
                          <label>SL Label</label>
                          <input type="text" name="sl_label" class="form-control" placeholder="SL Label" value="{{ $menu_item->sl_label }}">

                        </div>

                        <div class="form-group mb-1 col-sm-12 col-md-3">
                          <label>URL</label>
                          <input type="text" name="url" class="form-control" placeholder="SL Label" value="{{ $menu_item->url }}">

                        </div>

                        <div class="form-group mb-1 col-sm-12 col-md-1">
                          <label>Ordaring By</label>
                          <input type="number" name="ordering" class="form-control" placeholder="Ordaring" value="{{ $menu_item->ordering }}">

                        </div>

                        <div class="form-group col-sm-12 col-md-2 text-center mt-2">
                          <button type="button" class="btn btn-danger" data-repeater-delete> <i class="ft-x"></i> Delete</button>
                        </div>
                      </div>
                      <hr>
                    </div>
                    @endforeach
                </div>

                <div class="form-group overflow-hidden">
                  <div class="col-12">
                    <button type="button" data-repeater-create class="btn btn-primary btn-lg"> Add Item </button>
                    <button type="submit" class="btn btn-success btn-lg"> Save Change </button>
                  </div>
                </div>
            </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection

@section('js_plugin')
<script src="{{ asset('admin/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
@endsection

@section('custom_js')
<script src="{{ asset('admin/js/scripts/forms/form-repeater.js') }}" type="text/javascript"></script>
@endsection
