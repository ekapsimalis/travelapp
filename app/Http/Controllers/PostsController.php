<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function postPost(Request $request){
        $post = new Post();
        $post->body = $request['body'];
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect()->back();
    }
}
