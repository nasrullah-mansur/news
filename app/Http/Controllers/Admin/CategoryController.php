<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use App\Services\CategoryService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        return $this->categoryService = $categoryService;
    }

    public function index() {
        return view('admin.category.index');
    }

    public function getCategories() {
        return $this->categoryService->GetAllData();
    }

    public function store(CategoryRequest $request) {
        $category = $this->categoryService->store($request);
        if ($category['success'] == true) {
            return $request;
        }
    }

    public function show($id) {
        $category = Category::where('id', $id)->firstOrFail();
        return $category;
    }

    public function update(CategoryRequest $request) {
        $category = $this->categoryService->update($request);
        if ($category['success'] == true) {
            return $request;
        }
    }

    public function delete($id){
        $category = $this->categoryService->delete($id);
        return $category;
    }


    public function getCategoriesMain()
    {
        return $categories_main = Category::where('p_id', 0)->orderBy('created_at', 'DESC')->get();
    }
}
