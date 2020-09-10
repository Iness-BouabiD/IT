<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Auth;
use Validator;
class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }
    public function connect( Request $request)
    {
       $user_data = array(
        'login' => $request->get('login'),
        'password' => $request->get('password')
      );
       var_dump($user_data);
        if(Auth::attempt($user_data)){
            return redirect('/success');
        }
        else{
          return back()->with('error','login ou mot de passe incorrect!');
        }
    }


    public function success()
    {
      return redirect('/');
    }
    public function deco()
    {
      Auth::logout();
      return redirect('/');
    }
}
