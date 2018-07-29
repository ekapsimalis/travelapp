@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col s7">
            <form action="{{ route('post.post') }}" method="post">
                <div class="input-field s12">
                    <textarea name="body" id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Say something about your travels</label>
                </div>
                <button type="submit" class="btn waves-effect waves-light">Post</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>

            
           

        </div>
        <div class="col s5">
            <p class="center-align">What other people say...</p>
            @foreach($posts as $post)
                <div class="card grey lighten-4 z-depth-3">
                    <div class="card-content">
                        <span class=" black-text card-title"> <i class="material-icons prefix">account_circle</i> {{ $post->user->email }}</span>
                        <div class="divider"></div>
                        <p class="black-text"> {{ $post->body }}</p>
                        <small class="black-text">Posted at: <strong>{{ $post->created_at }}</strong></small>
                        <!--Apply a date conversion using unix PHP-->
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    {{ $posts->links() }}
@endsection