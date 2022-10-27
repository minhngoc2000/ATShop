<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;

class AdminLoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admins')->attempt($login)) {
            return redirect('admin/home');
        }
        return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
    }

    public function getLogout()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('getLogin');
    }
}
