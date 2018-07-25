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
            <h4>Explore top news </h4>
            <ul class="collection teal lighten-2">
                <li class="collection-item-avatar">
                    <span class="title text-white"><h5>{{$news->articles[0]->title}}</h5></span>
                    <p class="text-white">{{$news->articles[0]->description}}</p>
                </li>
                <li class="collection-item-avatar">
                        <span class="title"><h5>{{$news->articles[1]->title}}</h5></span>
                        <p>{{$news->articles[1]->description}}</p>
                </li>
                <li class="collection-item-avatar">
                        <span class="title"><h5>{{$news->articles[2]->title}}</h5></span>
                        <p>{{$news->articles[2]->description}}</p>
                </li>
                <li class="collection-item-avatar">
                        <span class="title"><h5>{{$news->articles[3]->title}}</h5></span>
                        <p>{{$news->articles[3]->description}}</p>
                </li>
            </ul>

        </div>
        <div class="col s5">
            @foreach($posts as $post)
                <div class="card teal lighten-2">
                    <div class="card-content white-text">
                        <span class="card-title">{{ $post->user->email }}</span>
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection