<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index')->with("test", "test");
    }

    public function getLogin(){
        return view('admin.login');
    }

    public function postLogin(LoginRequest $request){
        $email      = $request->input('email');
        $password   = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return redirect('/admin/login')
            ->with('error', trans('front/login.credentials'))
            ->withInput($request->only('email'));
    }
}
