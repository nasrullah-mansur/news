<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Models\Front\AddPlace;
use App\Http\Controllers\Controller;

class AddPlaceController extends Controller
{
    public function index()
    {
        return view('admin.add_place.index');
    }


    public function all_add()
    {
        $adds = AddPlace::get()->reverse();
        return datatables($adds)
            ->addIndexColumn()
            ->addColumn('action', function ($add){
                return
                '<a style="margin: 0 3px;" class="btn btn-secondary edit-btn" href="'. route('add.place.edit', $add->id) .'"><i class="edit-btn ft-edit"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$add->id.'"><i data-id="'.$add->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('image', function($add) {
                return '<img style="max-width: 90px;" src="'. asset($add->image) .'">';
            })
            ->editColumn('created_at', function ($add) {
                return $add->created_at->format('d-m-Y');
            })
            ->editColumn('name', function ($add) {
                return ucwords($add->name);
            })

            ->editColumn('type', function($add) {
                if($add->type == 1) {
                    return 'Small';
                } elseif($add->type == 2) {
                    return 'Medium';
                } elseif($add->type == 3) {
                    return 'Big';
                } elseif($add->type == 4) {
                    return 'Sidebar';
                }
            })

            ->escapeColumns([])

            ->make(true);
    }


    public function create()
    {
        return view('admin.add_place.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'type' => 'required',
            'url' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $addPlace = new AddPlace();

        if($request->has('image')) {
           $addPlace->image = ImageUpload($request->image, 'adds/', null);
        }


        $addPlace->type = $request->type;
        $addPlace->url = $request->url;
        $addPlace->name = $request->name;
        $addPlace->email = $request->email;
        $addPlace->phone = $request->phone;
        $addPlace->address = $request->address;

        $addPlace->save();

        return redirect()->route('add.place.index')->with('store', 'Successfully Created');
    }


    public function edit($id)
    {
        $add = AddPlace::where('id', $id)->firstOrFail();
        return view('admin.add_place.edit', compact('add'));
    }

    public function update(Request $request, $id)
    {
        $addPlace = AddPlace::where('id', $id)->firstOrFail();

        $request->validate([
            'image' => 'nullable',
            'type' => 'required',
            'url' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        if($request->has('image')) {
           $addPlace->image = ImageUpload($request->image, 'adds/', null);
        }


        $addPlace->type = $request->type;
        $addPlace->url = $request->url;
        $addPlace->name = $request->name;
        $addPlace->email = $request->email;
        $addPlace->phone = $request->phone;
        $addPlace->address = $request->address;

        $addPlace->save();

        return redirect()->route('add.place.index')->with('store', 'Successfully Updated');
    }


    public function destroy($id)
    {
        $addPlace = AddPlace::where('id', $id)->firstOrFail();
        $addPlace->delete();
    }
}
