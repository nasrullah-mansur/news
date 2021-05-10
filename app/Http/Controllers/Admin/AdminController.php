<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Models\Admin\AdminProfile;
use App\Http\Controllers\Controller;
use App\Notifications\AddAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    private $adminService;

    public function __construct(AdminService $adminService) {
        $this->adminService = $adminService;
    }

    public function index()
    {
        return view('admin.user.admin');
    }


    public function getAll()
    {
        return $this->adminService->GetAdmins();
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        AdminProfile::create([
            'admin_id' => $user->id
        ]);


        $user = Auth::guard(Session::get('role'))->user();

        Notification::send($user, new AddAdmin($user));
    }

    public function show($id)
    {
        $user = Admin::where('id', $id)->with('profile')->firstOrFail();
        return view('admin.user.show', compact('user'));
    }


    public function destroy(Request $request)
    {
        $user = Admin::where('id', $request->id)->firstOrFail();
        $user->delete();
    }
}
