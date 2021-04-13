<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TranslationRequest extends FormRequest
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
            'pl_one' => 'required',
            'sl_one' => 'required',
            'pl_two' => 'required',
            'sl_two' => 'required',
            'pl_three' => 'required',
            'sl_three' => 'required',
            'pl_four' => 'required',
            'sl_four' => 'required',
            'pl_five' => 'required',
            'sl_five' => 'required',
            'pl_six' => 'required',
            'sl_six' => 'required',
            'pl_seven' => 'required',
            'sl_seven' => 'required',
            'pl_eight' => 'required',
            'sl_eight' => 'required',
            'pl_nine' => 'required',
            'sl_nine' => 'required',
            'pl_ten' => 'required',
            'sl_ten' => 'required',
            'pl_eleven' => 'required',
            'sl_eleven' => 'required',
            'pl_twelve' => 'required',
            'sl_twelve' => 'required',
            'pl_thirteen' => 'required',
            'sl_thirteen' => 'required',
            'pl_fourteen' => 'required',
            'sl_fourteen' => 'required',
            'pl_fifteen' => 'required',
            'sl_fifteen' => 'required',
            'pl_sixteen' => 'required',
            'sl_sixteen' => 'required',
            'pl_seventeen' => 'required',
            'sl_seventeen' => 'required',
            'pl_eighteen' => 'required',
            'sl_eighteen' => 'required',
            'pl_nineteen' => 'required',
            'sl_nineteen' => 'required',
            'pl_twenty' => 'required',
            'sl_twenty' => 'required',
            'pl_twenty_one' => 'required',
            'sl_twenty_one' => 'required',
            'pl_twenty_two' => 'required',
            'sl_twenty_two' => 'required',
            'pl_twenty_three' => 'required',
            'sl_twenty_three' => 'required',
            'pl_twenty_four' => 'required',
            'sl_twenty_four' => 'required',
            'pl_twenty_five' => 'required',
            'sl_twenty_five' => 'required',
        ];
    }
}
