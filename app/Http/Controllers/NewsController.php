<?php

namespace Nature\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){
        $apiresponse = file_get_contents('https://newsapi.org/v2/top-headlines?sources=national-geographic&apiKey=5f59ad149eff4be1a8f016bfd51d4fb9');
        $ngnews = json_decode($apiresponse);
        return view('news.index')->with('ngnews', $ngnews);
    }

    public function science(){
        $apiresponse = file_get_contents('https://newsapi.org/v2/top-headlines?country=gb&category=science&apiKey=5f59ad149eff4be1a8f016bfd51d4fb9');
        $snews = json_decode($apiresponse);
        return view('news.science')->with('snews', $snews);
    }

    public function health(){
        $apiresponse = file_get_contents('https://newsapi.org/v2/top-headlines?country=gb&category=health&apiKey=5f59ad149eff4be1a8f016bfd51d4fb9');
        $hnews = json_decode($apiresponse);
        return view('news.health')->with('hnews', $hnews);
    }

    public function save(Request $request){

        $this->validate($request, [
            'title' => 'required|max:191',
            'description' => 'required',
            'url' => 'required|max:191',
            'urlToImage' => 'required|max:191'
        ]);

        $user = Auth::user();

        DB::table('news')->insert(
            ['title' => $request['title'], 'description' => $request['description'], 'url' => $request['url'],
             'urlToImage' => $request['urlToImage'], 'user_id' => $user->id]         
        );
        return redirect()->back();
    }
}
