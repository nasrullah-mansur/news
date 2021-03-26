<?php
namespace   App\Services;

use Illuminate\Support\Str;
use App\Models\Admin\Category;

class CategoryService
{
    public function store($request)
    {
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];
        $cateData['name'] = $request->name;
        $cateData['slug'] = Str::slug($request->name , '-');
        $category = Category::create($cateData);
        if ($category) {
            $data['success'] = true;
            $data['message'] = __('Category Successfully added');
            $data['data'] = $category;
            return $data;
        }
        return $data;  
    } 
    
    public function update($request,  $category)
    {
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];
        $cateData['name'] = $request->name;
        $cateData['slug'] = Str::slug($request->name , '-');
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
