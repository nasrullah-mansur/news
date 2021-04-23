@extends('layouts.admin')
@section('content')

<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Read & Reply</h4>
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
                        <ul>
                            <li>Name: {{ ucwords($contact->name) }}</li>
                            <li>Email: {{ $contact->email }}</li>
                            <li>
                                <h4>Subject: {{ $contact->subject }}</h4>
                            </li>
                            <hr>
                            <div>
                                {{ $contact->massage }}
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Reply</h4>
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
                        <div class="col-12">
                            <form action="{{ route('contact.reply.send') }}" method="POST">
                                @csrf
                                <fieldset class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger"> - {{ $errors->first('subject') }}</span>
                                    @endif
                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="massage">Massage</label>
                                    <textarea class="form-control" id="massage" name="massage" rows="5"></textarea>
                                    @if ($errors->has('massage'))
                                    <span class="text-danger"> - {{ $errors->first('massage') }}</span>
                                @endif
                                </fieldset>
                                <input type="hidden" name="email" value="{{ $contact->email }}">
                                <input type="hidden" name="name" value="{{ $contact->name }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-reply"></i> Send Reply
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection
