<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index')->with("test", "test");
    }

    public function login(){
        return view('admin.login');
    }
}
