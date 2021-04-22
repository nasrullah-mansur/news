<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        return [
            'pl_title' => 'required',
            'sl_title' => 'required',
            'pl_description' => 'required',
            'sl_description' => 'required',
            'pl_content' => 'nullable',
            'sl_content' => 'nullable',
        ];
    }
}
