<?php
    namespace   App\Services;

use App\Models\User;
use App\Models\Admin\Admin;

class AdminService
    {
        public function GetAdmins()
        {
            $admins = Admin::get();
            return datatables($admins)
            ->addIndexColumn()
            ->addColumn('action', function($admin) {
                return
                '<a class="btn btn-secondary edit-btn" href="'. route('admin.show', $admin->id) .'"><i class="edit-btn ft-eye"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$admin->id.'"><i data-id="'.$admin->id.'" class="delete-btn ft-trash-2"></i></a>';
            })

            ->editColumn('created_at', function ($admin) {
                return $admin->created_at->format('d-m-Y');
            })

            ->escapeColumns([])
            ->make(true);
        }
    }



?>
