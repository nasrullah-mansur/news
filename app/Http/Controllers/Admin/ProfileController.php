<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Profile;
use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Owner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function profile()
    {

        $role = Session::get('role');
        if($role == 'owner') {
            $user = Owner::where('id', Auth::guard('owner')->user()->id)->with('profile')->firstOrFail();
        } elseif($role == 'admin') {
            $user = Admin::where('id', Auth::guard('admin')->user()->id)->with('profile')->firstOrFail();
        } else {
            $user = User::where('id', Auth::guard('web')->user()->id)->with('profile')->firstOrFail();
        }
        return view('admin.user.show', compact('user'));
    }

    public function password_reset()
    {
        $user = Auth::guard(Session::get('role'))->user();
        return view('admin.user.password', compact('user'));
    }

    public function password_update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8',
            'password_confirmation' => 'required|same:new_password',
        ]);

        $user = Auth::guard(Session::get('role'))->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Current password does not match');
        }

        $user->password = Hash::make($request->new_password);

        $user->save();

        Auth::guard(Session::get('role'))->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');


    }


    public function edit($id)
    {
        $profile = Profile::where('user_id', $id)->with('user')->firstOrFail();
        return view('admin.profile.edit', compact('profile'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'profile' => 'nullable|mimes:png,jpg,jpeg,gif',
            'banner' => 'nullable|mimes:png,jpg,jpeg,gif',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
        ]);

        $user = User::where('id', Auth::guard(Session::get('role'))->user()->id )->firstOrFail();
        $profile = Profile::where('user_id', Auth::guard(Session::get('role'))->user()->id )->firstOrFail();

        $user->update([
            'name' => $request->name,
        ]);

        $profile->facebook = $request->facebook;
        $profile->twitter = $request->twitter;
        $profile->linkedin = $request->linkedin;

        if($request->has('profile')) {
            $profile->profile = ResizeImageUpload($request->profile, 'user/profile/', '', 110, 110);
        }
        if($request->has('banner')) {
            $profile->banner = ResizeImageUpload($request->banner, 'user/profile/', '', 800, 600);
        }

        $profile->save();

        return redirect()->back()->with('update', 'Profile Successfully Updated');
    }
}
