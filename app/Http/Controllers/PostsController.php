<?php

namespace Nature\Http\Controllers;
use Nature\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class PostsController extends Controller
{
    public function postPost(Request $request){
        
        $this->validate($request, [
            'body' => 'required'
        ]);

        $post = new Post();
        $post->body = $request['body'];
        $post->user_id = Auth::user()->id;

        $post->save();

        Session::flash('success', 'Post successfully created!');

        return redirect()->back();
    }
}
