<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Profile;
use App\Services\UserService;
use App\Notifications\AddUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{

    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('admin.user.index');
    }

    public function GetUsers()
    {
        return $this->userService->GetUsers();
    }

    public function show($id)
    {
        $user = User::where('id', $id)->with('profile')->firstOrFail();
        return view('admin.user.show', compact('user'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Profile::create([
            'user_id' => $user->id
        ]);

        $user = Auth::guard(Session::get('role'))->user();

        Notification::send($user, new AddUser($user));
    }

    public function destroy(Request $request)
    {
        $user = User::where('id', $request->id)->firstOrFail();
        $user->delete();
    }

}
