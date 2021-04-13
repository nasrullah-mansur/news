@extends('layouts.admin')

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
                        <form action="{{ route('admin.translation.update') }}" method="POST">
                            @csrf
                            <table class="table table-striped table-bordered datatable">
                                    <thead>
                                        <tr>
                                            <th>Primary Language</th>
                                            <th>Secondary Language</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_one') ? 'is-invalid' : '' }}" name="pl_one" value="{{ $heading->pl_one }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_one') ? 'is-invalid' : '' }}" name="sl_one" value="{{ $heading->sl_one }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_two') ? 'is-invalid' : '' }}" name="pl_two" value="{{ $heading->pl_two }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_two') ? 'is-invalid' : '' }}" name="sl_two" value="{{ $heading->sl_two }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_three') ? 'is-invalid' : '' }}" name="pl_three" value="{{ $heading->pl_three }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_three') ? 'is-invalid' : '' }}" name="sl_three" value="{{ $heading->sl_three }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_four') ? 'is-invalid' : '' }}" name="pl_four" value="{{ $heading->pl_four }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_four') ? 'is-invalid' : '' }}" name="sl_four" value="{{ $heading->sl_four }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_five') ? 'is-invalid' : '' }}" name="pl_five" value="{{ $heading->pl_five }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_five') ? 'is-invalid' : '' }}" name="sl_five" value="{{ $heading->sl_five }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_six') ? 'is-invalid' : '' }}" name="pl_six" value="{{ $heading->pl_six }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_six') ? 'is-invalid' : '' }}" name="sl_six" value="{{ $heading->sl_six }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_seven') ? 'is-invalid' : '' }}" name="pl_seven" value="{{ $heading->pl_seven }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_seven') ? 'is-invalid' : '' }}" name="sl_seven" value="{{ $heading->sl_seven }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_eight') ? 'is-invalid' : '' }}" name="pl_eight" value="{{ $heading->pl_eight }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_eight') ? 'is-invalid' : '' }}" name="sl_eight" value="{{ $heading->sl_eight }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_nine') ? 'is-invalid' : '' }}" name="pl_nine" value="{{ $heading->pl_nine }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_nine') ? 'is-invalid' : '' }}" name="sl_nine" value="{{ $heading->sl_nine }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_ten') ? 'is-invalid' : '' }}" name="pl_ten" value="{{ $heading->pl_ten }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_ten') ? 'is-invalid' : '' }}" name="sl_ten" value="{{ $heading->sl_ten }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_eleven') ? 'is-invalid' : '' }}" name="pl_eleven" value="{{ $heading->pl_eleven }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_eleven') ? 'is-invalid' : '' }}" name="sl_eleven" value="{{ $heading->sl_eleven }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_twelve') ? 'is-invalid' : '' }}" name="pl_twelve" value="{{ $heading->pl_twelve }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_twelve') ? 'is-invalid' : '' }}" name="sl_twelve" value="{{ $heading->sl_twelve }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_thirteen') ? 'is-invalid' : '' }}" name="pl_thirteen" value="{{ $heading->pl_thirteen }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_thirteen') ? 'is-invalid' : '' }}" name="sl_thirteen" value="{{ $heading->sl_thirteen }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_fourteen') ? 'is-invalid' : '' }}" name="pl_fourteen" value="{{ $heading->pl_fourteen }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_fourteen') ? 'is-invalid' : '' }}" name="sl_fourteen" value="{{ $heading->sl_fourteen }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_fifteen') ? 'is-invalid' : '' }}" name="pl_fifteen" value="{{ $heading->pl_fifteen }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_fifteen') ? 'is-invalid' : '' }}" name="sl_fifteen" value="{{ $heading->sl_fifteen }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_sixteen') ? 'is-invalid' : '' }}" name="pl_sixteen" value="{{ $heading->pl_sixteen }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_sixteen') ? 'is-invalid' : '' }}" name="sl_sixteen" value="{{ $heading->sl_sixteen }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_seventeen') ? 'is-invalid' : '' }}" name="pl_seventeen" value="{{ $heading->pl_seventeen }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_seventeen') ? 'is-invalid' : '' }}" name="sl_seventeen" value="{{ $heading->sl_seventeen }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_eighteen') ? 'is-invalid' : '' }}" name="pl_eighteen" value="{{ $heading->pl_eighteen }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_eighteen') ? 'is-invalid' : '' }}" name="sl_eighteen" value="{{ $heading->sl_eighteen }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_nineteen') ? 'is-invalid' : '' }}" name="pl_nineteen" value="{{ $heading->pl_nineteen }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_nineteen') ? 'is-invalid' : '' }}" name="sl_nineteen" value="{{ $heading->sl_nineteen }}">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_twenty') ? 'is-invalid' : '' }}" name="pl_twenty" value="{{ $heading->pl_twenty }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_twenty') ? 'is-invalid' : '' }}" name="sl_twenty" value="{{ $heading->sl_twenty }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_twenty_one') ? 'is-invalid' : '' }}" name="pl_twenty_one" value="{{ $heading->pl_twenty_one }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_twenty_one') ? 'is-invalid' : '' }}" name="sl_twenty_one" value="{{ $heading->sl_twenty_one }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_twenty_two') ? 'is-invalid' : '' }}" name="pl_twenty_two" value="{{ $heading->pl_twenty_two }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_twenty_two') ? 'is-invalid' : '' }}" name="sl_twenty_two" value="{{ $heading->sl_twenty_two }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_twenty_three') ? 'is-invalid' : '' }}" name="pl_twenty_three" value="{{ $heading->pl_twenty_three }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_twenty_three') ? 'is-invalid' : '' }}" name="sl_twenty_three" value="{{ $heading->sl_twenty_three }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_twenty_four') ? 'is-invalid' : '' }}" name="pl_twenty_four" value="{{ $heading->pl_twenty_four }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_twenty_four') ? 'is-invalid' : '' }}" name="sl_twenty_four" value="{{ $heading->sl_twenty_four }}">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('pl_twenty_five') ? 'is-invalid' : '' }}" name="pl_twenty_five" value="{{ $heading->pl_twenty_five }}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control {{ $errors->has('sl_twenty_five') ? 'is-invalid' : '' }}" name="sl_twenty_five" value="{{ $heading->sl_twenty_five }}">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Primary Language</th>
                                            <th>Secondary Language</th>
                                        </tr>

                                    </tfoot>
                            </table>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
