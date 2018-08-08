<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\Feedback;
use App\Country;
use Session;

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

        // Add countries per user in the dashboard
        $user = Auth::user();
        $countries = $user->countries()->get();
        $count = count($countries);
        //var_dump($count);

        return view('dashboard')->with('posts', $posts)->with('countries', $countries)->with('count', $count);
    }

    public function postFeedback(Request $request){

        if (Auth::guest()){
            return redirect()->route('login');
        }

        $this->validate($request, [
            'title' => 'required|max:191',
            'body' => 'required',
            'rating' => 'required'
        ]);

        $feedback = new Feedback();

        $feedback->title = $request['title'];
        $feedback->body = $request['body'];
        $feedback->rating = $request['rating'];
        $feedback->user_id = Auth::user()->id;

        $feedback->save();

        Session::flash('feedback', 'Thanks for rating us, we appriciate your feedback');

        return redirect()->route('dashboard');

    }
}

