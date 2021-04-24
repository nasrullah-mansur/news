<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Add;
use Illuminate\Http\Request;

class AddController extends Controller
{

    public function index()
    {
        return view('admin.contact.add_request');
    }

    public function all_request()
    {
        $requests = Add::get()->reverse();
        return datatables($requests)
            ->addIndexColumn()
            ->addColumn('action', function ($request){
                return
                '<a class="btn btn-secondary edit-btn" href="'. route('admin.add.request.view', $request->id) .'"><i data-id="'.$request->id.'" class="edit-btn ft-eye"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$request->id.'"><i data-id="'.$request->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($request) {
                return $request->created_at->format('d-m-Y');
            })
            ->editColumn('name', function ($request) {
                return ucwords($request->name);
            })

            ->make(true);
    }

    public function view($id)
    {
        $add = Add::where('id', $id)->firstOrFail();
        return view('admin.contact.add_request_view', compact('add'));
    }

    public function request(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'address' => 'required|max:255',
            'name' => 'required|max:255',
            'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required',
            'file' => 'nullable|mimes:png,jpg,jpeg,gif,pdf'
        ]);

        $add_request = new Add();

        $add_request->email = $request->email;
        $add_request->address = $request->address;
        $add_request->name = $request->name;
        $add_request->number = $request->number;
        $add_request->message = $request->message;
        if($request->has('file')) {
            $add_request->file = ImageUpload($request->file, 'add/request', null);
        }

        $add_request->save();

        return redirect()->route('front.request.add');


    }


    public function destroy($id)
    {
        $add = Add::where('id', $id)->firstOrFail();
        $add->delete();
    }
}
