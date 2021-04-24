<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }


    public function create()
    {
        return view('admin.faq.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'pl_question' => 'required',
            'pl_answer' => 'required',
            'sl_question' => 'required',
            'sl_answer' => 'required',
        ]);

        $faq = new Faq();
        $faq->pl_question = $request->pl_question;
        $faq->pl_answer = $request->pl_answer;
        $faq->sl_question = $request->sl_question;
        $faq->sl_answer = $request->sl_answer;

        $faq->save();

        return redirect()->route('admin.faq.index')->with('store', 'FAQ successfully added');
    }


    public function edit($id)
    {
        $faq = Faq::where('id', $id)->firstOrFail();
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pl_question' => 'required',
            'pl_answer' => 'required',
            'sl_question' => 'required',
            'sl_answer' => 'required',
        ]);

        $faq = Faq::where('id', $id)->firstOrFail();
        $faq->pl_question = $request->pl_question;
        $faq->pl_answer = $request->pl_answer;
        $faq->sl_question = $request->sl_question;
        $faq->sl_answer = $request->sl_answer;

        $faq->save();

        return redirect()->route('admin.faq.index')->with('store', 'FAQ successfully updated');
    }

    public function destroy($id)
    {
        $faq = Faq::where('id', $id)->firstOrFail();
        $faq->delete();
        return redirect()->route('admin.faq.index')->with('update', 'FAQ successfully deleted');
    }
}
