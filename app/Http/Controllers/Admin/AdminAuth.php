<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function login() {
        return view('admin.login');
    }
    public function dologin(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $rememberme = $request->rememberme;
        if(auth()->guard('admin')->attempt(['email' => $email, 'password' => $password], $rememberme))
        {   
            return redirect('admin/index');
        }
        else {
            session()->flash('error', 'Wrong Email Or Password');
            return redirect('admin/login');
        }
    }
    public function logout() {
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }
    public function index() {
        return view('admin.index');
    }
    public function forget_pass() {
        return view('admin.forget_pass');
    }

}
