<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function index()
    {
        return view('admin.contact.comment');
    }


    public function comment_all()
    {
        $comments = Comment::get()->reverse();
        return datatables($comments)
            ->addIndexColumn()
            ->addColumn('action', function ($comment){
                return
                '<a class="btn btn-secondary edit-btn" href="'. route('admin.comment.view', $comment->id) .'"><i data-id="'.$comment->id.'" class="edit-btn ft-eye"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$comment->id.'"><i data-id="'.$comment->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($comment) {
                return $comment->created_at->format('d-m-Y');
            })
            ->editColumn('name', function ($comment) {
                return ucwords($comment->name);
            })

            ->make(true);
    }


    public function view($id)
    {
        $comment = Comment::where('id', $id)->firstOrFail();
        return view('admin.contact.comment_view', compact('comment'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'news_id' => 'required',
            'p_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'comment' => 'required',
        ]);

        $comment = new Comment();
        $comment->news_id = $request->news_id;
        $comment->p_id = $request->p_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->phone = $request->phone;
        $comment->comment = $request->comment;

        $comment->save();

        return redirect()->back();
    }


    public function destroy($id)
    {
        $comment = Comment::where('id', $id)->firstOrFail();
        $comment->delete();
        return redirect()->route('admin.comment.index')->with('update', 'Comment successfully deleted');
    }

    public function delete($id)
    {
        $comment = Comment::where('id', $id)->firstOrFail();
        $comment->delete();
    }
}
