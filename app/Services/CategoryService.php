<?php
namespace   App\Services;

use Illuminate\Support\Str;
use App\Models\Admin\Category;

class CategoryService
{

    public function GetAllData() {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return datatables($categories)
            ->addIndexColumn()
            ->addColumn('action', function ($category){
                return '<a data-toggle="modal" data-target="#edit_category" class="btn btn-secondary edit-btn" href="#" data-id="'.$category->id.'"><i data-id="'.$category->id.'" class="edit-btn ft-edit"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$category->id.'"><i data-id="'.$category->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($category) {
                return $category->created_at->format('d M Y');
            })
            ->editColumn('sl_name', function ($category) {
                if($category->sl_name == '') {
                    return 'NULL';
                } else {
                    return $category->sl_name;
                }
            })
            ->make(true);
    }

    public function store($request)
    {
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];
        $cateData['pl_name'] = $request->pl_name;
        $cateData['pl_slug'] = Str::slug($request->pl_name , '-');
        $cateData['sl_name'] = $request->sl_name;
        $cateData['sl_slug'] = Str::slug($request->sl_name , '-');
        $category = Category::create($cateData);
        if ($category) {
            $data['success'] = true;
            $data['message'] = __('Category Successfully added');
            $data['data'] = $category;
            return $data;
        }
        return $data;
    }

    public function update($request)
    {
        $category = Category::where('id', $request->id)->firstOrFail();
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];
        $cateData['pl_name'] = $request->pl_name;
        $cateData['pl_slug'] = Str::slug($request->pl_name , '-');
        $cateData['sl_name'] = $request->sl_name;
        $cateData['sl_slug'] = Str::slug($request->sl_name , '-');
        $category->fill($cateData)->save();
        if ($category) {
            $data['success'] = true;
            $data['message'] = __('Category Successfully added');
            $data['data'] = $category;
            return $data;
        }
        return $data;
    }
}
