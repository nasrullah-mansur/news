<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Http\Controllers\Controller;
use App\Mail\ReplyMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('admin.contact.contact');
    }

    public function contact_all()
    {
        $contacts = Contact::get()->reverse();
        return datatables($contacts)
            ->addIndexColumn()
            ->addColumn('action', function ($contact){
                return
                '<a class="btn btn-secondary edit-btn" href="'. route('contact.reply', $contact->id) .'"><i data-id="'.$contact->id.'" class="edit-btn fa fa-reply"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$contact->id.'"><i data-id="'.$contact->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($contact) {
                return $contact->created_at->format('d-m-Y');
            })
            ->editColumn('name', function ($contact) {
                return ucwords($contact->name);
            })

            ->make(true);
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'subject' => 'required|max:255',
            'massage' => 'required',
        ]);

        $contact = new Contact();
        $contact->email = $request->email;
        $contact->name = $request->name;
        $contact->subject = $request->subject;
        $contact->massage = $request->massage;

        $contact->save();

        return redirect()->back()->with('store', "Submitted Successful");

    }


    public function contact_reply($id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();
        return view('admin.contact.contact_reply', compact('contact'));
    }


    public function reply_send(Request $request)
    {
        // return $request;
        $request->validate([
            'subject' => 'required',
            'massage' => 'required'
        ]);

        $email = $request->email;

        $reply = [
            'name' => $request->name,
            'subject' => $request->subject,
            'massage' => $request->massage,
        ];

        Mail::to($email)->send(new ReplyMail($reply));

        return redirect()->back()->with('store', 'Massage successfully sended');
    }



    public function destroy($id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();
        $contact->delete();
    }
}
