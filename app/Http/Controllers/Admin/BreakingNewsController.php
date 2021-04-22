<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BreakingNews;
use Illuminate\Http\Request;

class BreakingNewsController extends Controller
{
    public function index()
    {
        return view('admin.breaking.index');
    }


    public function all_breaking()
    {
        $breaking_news =  BreakingNews::get()->reverse();
        return datatables($breaking_news)
            ->addIndexColumn()
            ->addColumn('action', function ($breaking_news){
                return
                '<a class="btn btn-secondary edit-btn" href="'. route('admin.breaking.edit', $breaking_news->id) .'"><i class="edit-btn ft-edit"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$breaking_news->id.'"><i data-id="'.$breaking_news->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($breaking_news) {
                return $breaking_news->created_at->format('d-m-Y');
            })

            ->editColumn('status', function ($breaking_news) {
                if($breaking_news->status == 1) {
                    return 'Published';
                } elseif($breaking_news->status == 2) {
                    return 'Draft';
                } else {
                    return 'Pending';
                }
            })

            ->escapeColumns([])

            ->make(true);
    }

    public function create()
    {
        return view('admin.breaking.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'pl_breaking_news' => 'required',
            'sl_breaking_news' => 'required',
        ]);

        $breaking_news = new BreakingNews();

        $breaking_news->pl_breaking_news = $request->pl_breaking_news;
        $breaking_news->sl_breaking_news = $request->sl_breaking_news;
        $breaking_news->url = $request->url;
        $breaking_news->status = $request->status;

        $breaking_news->save();

        return redirect()->route('admin.breaking.index')->with('store', 'Breaking News Successfully Added');
    }

    public function edit($id)
    {
        $breaking_news = BreakingNews::where('id', $id)->firstOrFail();
        return view('admin.breaking.edit', compact('breaking_news'));
    }

    public function update(Request $request, $id)
    {
        $breaking_news = BreakingNews::where('id', $id)->firstOrFail();
        $request->validate([
            'pl_breaking_news' => 'required',
            'sl_breaking_news' => 'required',
        ]);

        $breaking_news->pl_breaking_news = $request->pl_breaking_news;
        $breaking_news->sl_breaking_news = $request->sl_breaking_news;
        $breaking_news->url = $request->url;
        $breaking_news->status = $request->status;

        $breaking_news->save();
        return redirect()->route('admin.breaking.index')->with('store', 'Breaking News Successfully Updated');

    }

    public function destroy()
    {
        # code...
    }
}
