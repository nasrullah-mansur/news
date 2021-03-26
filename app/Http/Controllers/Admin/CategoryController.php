<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Services\CategoryService;
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
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return datatables($categories)
               ->addIndexColumn()
               ->addColumn('action', function ($category){
                    return '<a data-toggle="modal" data-target="#edit_category" class="btn btn-secondary edit-btn" href="#" data-id="'.$category->id.'"><i data-id="'.$category->id.'" class="edit-btn ft-edit"></i></a> 
                    <a class="btn btn-danger delete-btn" href="#" data-id="'.$category->id.'"><i data-id="'.$category->id.'" class="delete-btn ft-trash-2"></i></a>';
               })
               ->editColumn('created_at', function ($category) {
                return $category->created_at->format('d M Y');
            })->make(true);
    }

    public function store(Request $request) {
        app(CategoryRequest::class);
        $category = $this->categoryService->store($request);
        if ($category['success'] == true) {
            return $request;
        }
    }

    public function show($id) {
        $category = Category::where('id', $id)->firstOrFail();
        return $category;
    }

    public function update(Request $request, $id) {
        $category = Category::where('id', $id)->firstOrFail();
        app(CategoryRequest::class);
        $category = $this->categoryService->update($request,  $category);
        if ($category['success'] == true) {
            return $request;
        }
    }

    public function delete($id){
        $category = Category::where('id', $id)->firstOrFail();
        $category->delete();
    }
}
