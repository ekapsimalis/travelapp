<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class PagesController extends Controller
{
    public function index(){

        $apiresponse = file_get_contents('https://newsapi.org/v2/top-headlines?sources=national-geographic&apiKey=5f59ad149eff4be1a8f016bfd51d4fb9');
        $news = json_decode($apiresponse);
        return view('welcome')->with('news', $news);

    }

    public function about(){
        return view('about');

    }

    public function signup(){
        return view('signup');
    }

    public function login(){
        return view('login');
    }

    public function dashboard(){

        if (Auth::guest()){
            return redirect()->route('login');
        }

        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('dashboard')->with('posts', $posts);
    }
}

