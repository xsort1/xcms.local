<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index')->with("test", "test");
    }

    public function getLogin(){
        return view('admin.login');
    }

    public function postLogin(Request $request){
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email',         // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        $this->validate($request, $rules);

        $userdata = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            echo 'SUCCESS!';

        } else {
            // validation not successful, send back to form
            redirect()->back();
        }

    }
}
