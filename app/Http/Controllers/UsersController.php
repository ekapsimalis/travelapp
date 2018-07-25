<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    public function postSignUp(Request $request){
        $email = $request['email'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->password = $password;
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');

    }

    public function postLogIn(Request $request){
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->route('dashboard');
        }

        return redirect()->back();

    }

    public function getLogOut(){
        Auth::logout();
        return redirect()->route('home');
    }
}
