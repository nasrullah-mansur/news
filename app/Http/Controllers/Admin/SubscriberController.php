<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Subscriber;
use App\Models\Admin\SubscriberSection;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscriber = SubscriberSection::firstOrFail();
        return view('admin.subscriber.index', compact('subscriber'));
    }


    public function subscriber_all()
    {
        $subscribers = Subscriber::get()->reverse();
        return datatables($subscribers)
            ->addIndexColumn()
            ->addColumn('action', function ($subscriber){
                return
                '<a class="btn btn-danger delete-btn" href="#" data-id="'.$subscriber->id.'"><i data-id="'.$subscriber->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($subscriber) {
                return $subscriber->created_at->format('d-m-Y');
            })
            ->make(true);
    }



    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;

        $subscriber->save();

        return redirect()->back()->with('store', "Subscription Successful");
    }


    public function section_update(Request $request)
    {
        $subscriber = SubscriberSection::firstOrFail();
        $subscriber->pl_title = $request->pl_title;
        $subscriber->sl_title = $request->sl_title;
        $subscriber->pl_text = $request->pl_text;
        $subscriber->sl_text = $request->sl_text;
        $subscriber->save();
        return redirect()->route('subscriber.index')->with('update', 'Successfully updated');
    }



    public function destroy($id)
    {
        $subscriber = Subscriber::where('id', $id)->firstOrFail();
        $subscriber->delete();
        return redirect()->back();
    }
}
