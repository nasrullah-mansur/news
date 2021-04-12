<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\News;
use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
        if($this->getMethod() == 'POST') { // Create;
            return [
                // PL;
                'pl_headline' => 'required|unique:news',
                'pl_details' => 'required',

                // SL;
                'sl_headline' => 'nullable|unique:news',

                'category' => 'required',
                'image' => 'required|mimes:png,jpg,jpeg,gif',
                'image_alt' => 'required',
                'tag' => 'required',
                'action' => 'required',

            ];

        } else { // Update;
            if($this->request->has('id')) {
                $news = News::where('id', $this->request->get('id'))->firstOrFail();

                if($this->request->get('pl_headline') == $news->pl_headline) {
                    if($this->request->get('sl_headline') == $news->sl_headline) {
                        return [
                            // PL;
                            'pl_headline' => 'required',
                            'pl_details' => 'required',

                            // SL;
                            'sl_headline' => 'nullable',

                            'category' => 'required',
                            'image' => 'mimes:png,jpg,jpeg,gif',
                            'image_alt' => 'required',
                            'tag' => 'required',
                            'action' => 'required',

                        ];
                    } else {
                        return [
                            // PL;
                            'pl_headline' => 'required',
                            'pl_details' => 'required',

                            // SL;
                            'sl_headline' => 'nullable|unique:news',

                            'category' => 'required',
                            'image' => 'mimes:png,jpg,jpeg,gif',
                            'image_alt' => 'required',
                            'tag' => 'required',
                            'action' => 'required',

                        ];
                    }
                } else {
                    return [
                        // PL;
                        'pl_headline' => 'required|unique:news',
                        'pl_details' => 'required',

                        // SL;
                        'sl_headline' => 'nullable',

                        'category' => 'required',
                        'image' => 'mimes:png,jpg,jpeg,gif',
                        'image_alt' => 'required',
                        'tag' => 'required',
                        'action' => 'required',
                    ];
                }
            };
        }
    }
}
