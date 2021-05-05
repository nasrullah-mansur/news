<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Admin\AdminRequest;

class LoginController extends Controller
{
    public function admin_create()
    {
        return view('auth.admin');
    }


    public function admin_login(LoginRequest $request)
    {
        $request->authenticate('admin');
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            session(['role' => 'admin']);
            return redirect(RouteServiceProvider::HOME);
        }
    }



    public function owner_create()
    {
        return view('auth.owner');
    }


    public function owner_login(LoginRequest $request)
    {

        $request->authenticate('owner');
        if(Auth::guard('owner')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            session(['role' => 'owner']);
            return redirect(RouteServiceProvider::HOME);
        }

    }


}
