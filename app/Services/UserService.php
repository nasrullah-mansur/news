<?php
namespace   App\Services;

use App\Models\User;

class UserService
{
    public function GetUsers()
    {
        $users = User::orderBy('created_at', 'DESC')->get();

        return datatables($users)
        ->addIndexColumn()
        ->addColumn('action', function($user) {
            return
            '<a class="btn btn-secondary edit-btn" href="'. route('user.show', $user->id) .'"><i class="edit-btn ft-eye"></i></a>
            <a class="btn btn-danger delete-btn" href="#" data-id="'.$user->id.'"><i data-id="'.$user->id.'" class="delete-btn ft-trash-2"></i></a>';
        })

        ->editColumn('created_at', function ($category) {
            return $category->created_at->format('d-m-Y');
        })

        ->escapeColumns([])
        ->make(true);
    }
}




?>
