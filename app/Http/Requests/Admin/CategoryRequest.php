<?php

namespace App\Http\Requests\Admin;

use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin\Category;

class CategoryRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->request->has('id')) {

            $category = Category::where('id', $this->request->get('id'))->firstOrFail();

            if($this->request->get('pl_name') == $category->pl_name) {

                if($this->request->get('sl_name') == $category->sl_name) {
                    return [
                        'pl_name' => 'required',
                        'sl_name' => 'required'
                    ];
                } else {
                    return [
                        'pl_name' => 'required',
                        'sl_name' => 'required|unique:categories'
                    ];
                }
            } else {
                return [
                    'pl_name' => 'required|unique:categories',
                    'sl_name' => 'required'
                ];
            }


        } else{

            if($this->request->get('sl_name') == '') {
                return [
                    'pl_name' => 'required|unique:categories',
                    'sl_name' => 'required',
                ];
            } else {
                return [
                    'pl_name' => 'required|unique:categories',
                    'sl_name' => 'required|unique:categories'
                ];
            }


        }
    }
}
