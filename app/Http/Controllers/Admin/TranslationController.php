<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TranslationRequest;
use App\Models\Admin\Translation;

class TranslationController extends Controller
{
    public function edit()
    {
        $heading = Translation::first();
        return view('admin.translation.edit', compact('heading'));
    }

    public function update(TranslationRequest $request)
    {
        $heading = Translation::first();

        $heading->pl_one = $request->pl_one;
        $heading->sl_one = $request->sl_one;
        $heading->pl_two = $request->pl_two;
        $heading->sl_two = $request->sl_two;
        $heading->pl_three = $request->pl_three;
        $heading->sl_three = $request->sl_three;
        $heading->pl_four = $request->pl_four;
        $heading->sl_four = $request->sl_four;
        $heading->pl_five = $request->pl_five;
        $heading->sl_five = $request->sl_five;
        $heading->pl_six = $request->pl_six;
        $heading->sl_six = $request->sl_six;
        $heading->pl_seven = $request->pl_seven;
        $heading->sl_seven = $request->sl_seven;
        $heading->pl_eight = $request->pl_eight;
        $heading->sl_eight = $request->sl_eight;
        $heading->pl_nine = $request->pl_nine;
        $heading->sl_nine = $request->sl_nine;
        $heading->pl_ten = $request->pl_ten;
        $heading->sl_ten = $request->sl_ten;
        $heading->pl_eleven = $request->pl_eleven;
        $heading->sl_eleven = $request->sl_eleven;
        $heading->pl_twelve = $request->pl_twelve;
        $heading->sl_twelve = $request->sl_twelve;
        $heading->pl_thirteen = $request->pl_thirteen;
        $heading->sl_thirteen = $request->sl_thirteen;
        $heading->pl_fourteen = $request->pl_fourteen;
        $heading->sl_fourteen = $request->sl_fourteen;
        $heading->pl_fifteen = $request->pl_fifteen;
        $heading->sl_fifteen = $request->sl_fifteen;
        $heading->pl_sixteen = $request->pl_sixteen;
        $heading->sl_sixteen = $request->sl_sixteen;
        $heading->pl_seventeen = $request->pl_seventeen;
        $heading->sl_seventeen = $request->sl_seventeen;
        $heading->pl_eighteen = $request->pl_eighteen;
        $heading->sl_eighteen = $request->sl_eighteen;
        $heading->pl_nineteen = $request->pl_nineteen;
        $heading->sl_nineteen = $request->sl_nineteen;
        $heading->pl_twenty = $request->pl_twenty;
        $heading->sl_twenty = $request->sl_twenty;
        $heading->pl_twenty_one = $request->pl_twenty_one;
        $heading->sl_twenty_one = $request->sl_twenty_one;
        $heading->pl_twenty_two = $request->pl_twenty_two;
        $heading->sl_twenty_two = $request->sl_twenty_two;
        $heading->pl_twenty_three = $request->pl_twenty_three;
        $heading->sl_twenty_three = $request->sl_twenty_three;
        $heading->pl_twenty_four = $request->pl_twenty_four;
        $heading->sl_twenty_four = $request->sl_twenty_four;
        $heading->pl_twenty_five = $request->pl_twenty_five;
        $heading->sl_twenty_five = $request->sl_twenty_five;

        $heading->save();
        return redirect()->route('admin.translation.edit')->with('update', 'Updated Successfully');



       return $request;
    }
}
