<?php

namespace Nature\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nature\User;
use Session;

class UsersController extends Controller
{
    public function postSignUp(Request $request){

        $this->validate($request, [
            'username' => 'required|max:191',
            'email' => 'required|max:191|unique:users',
            'password' =>'required|max:191|'
        ]);

        $email = $request['email'];
        $password = bcrypt($request['password']);
        $username = $request['username'];

        $user = new User();
        $user->email = $email;
        $user->password = $password;
        $user->username = $username;
        $user->type = 'default';
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');

    }

    public function postLogIn(Request $request){

        $this->validate($request, [
            'email' => 'required|max:191',
            'password' => 'required|max:191'
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->route('dashboard');
        }

        Session::flash('loginerror', 'Either email or password is incorrect!');

        return redirect()->back();

    }

    public function getLogOut(){
        Auth::logout();
        return redirect()->route('home');
    }
}
