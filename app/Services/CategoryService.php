<?php
namespace   App\Services;

use App\Models\Admin\News;
use Illuminate\Support\Str;
use App\Models\Admin\Category;

class CategoryService
{

    public function GetAllData() {
        $categories = Category::get()->reverse();
        return datatables($categories)
            ->addIndexColumn()
            ->addColumn('action', function ($category){
                return
                '<a data-toggle="modal" data-target="#edit_category" class="btn btn-secondary edit-btn" href="#" data-id="'.$category->id.'"><i data-id="'.$category->id.'" class="edit-btn ft-eye"></i></a>
                <a data-toggle="modal" data-target="#edit_category" class="btn btn-secondary edit-btn" href="#" data-id="'.$category->id.'"><i data-id="'.$category->id.'" class="edit-btn ft-edit"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$category->id.'"><i data-id="'.$category->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($category) {
                return $category->created_at->format('d-m-Y');
            })
            ->editColumn('sl_name', function ($category) {
                if($category->sl_name == '') {
                    return 'NULL';
                } else {
                    return $category->sl_name;
                }
            })

            ->addColumn('created_by', function ($category) {
                if(isset($category->user->name)) {

                    return $category->user->name;
                }
                else {
                    return 'Not Available';
                }
            })

            ->addColumn('news_count', function ($category) {
                return $category->news->count();
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
            $data['message'] = __('Category Successfully updated');
            $data['data'] = $category;
            return $data;
        }
        return $data;
    }


    public function delete($id)
    {
        $category = Category::where('id', $id)->firstOrFail();
        $news = News::where('category_id', $category->id)->first();
        if($news === null) {
            $category->delete();
            $response = 'successfully deleted';
        } else {
            $response = 'category has news';
        }

        return $response;
    }
}
