@extends('layouts.admin')

@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Adds</h4>
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
                    <form action="{{ route('add.place.update', $add->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Name" value="{{ $add->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger"> - {{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" value="{{ $add->email }}">
                            @if ($errors->has('email'))
                                <span class="text-danger"> - {{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="Phone" value="{{ $add->phone }}">
                            @if ($errors->has('phone'))
                                <span class="text-danger"> - {{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea id="address" name="address" rows="5" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" placeholder="Address">{{ $add->address }}</textarea>
                            @if ($errors->has('address'))
                                <span class="text-danger"> - {{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <img style="max-width: 120px;" id="image_view" src="{{ asset($add->image) }}" alt="Add">
                            <br>
                            <br>
                            <label id="image" class="file center-block">
                              <input type="file" id="file" name="image">
                              <span class="file-custom"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select id="type" name="type" class="form-control">
                              <option {{ $add->type == 1 ? 'selected' : '' }} value="1">Small</option>
                              <option {{ $add->type == 2 ? 'selected' : '' }} value="2">Medium</option>
                              <option {{ $add->type == 3 ? 'selected' : '' }} value="3">Big</option>
                              <option {{ $add->type == 4 ? 'selected' : '' }} value="4">Sidebar</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" id="url" name="url" class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" placeholder="URL" value="{{ $add->url }}">
                            @if ($errors->has('url'))
                                <span class="text-danger"> - {{ $errors->first('url') }}</span>
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
@section('custom_js')
<script>
     $("#file").change(function() {
        readURL(this, $('#image_view'));
    });
</script>
@endsection
