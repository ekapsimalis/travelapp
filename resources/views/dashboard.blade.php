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
            <div class="row">
                <div class="col s12">
                    <h5 class="center-align">Countries you liked</h5>
                    <div class="row"></div>
                    @if ($count == 0)
                        <p class="center-align red">You haven't like any country yet... :(</p>
                        <a href="{{route('countries')}}" class="btn waves-effect waves-light col s12">Explore Countries</a>
                    @else
                        <ul class="collection z-depth-3">
                            @foreach ($countries as $country)
                                <li class="collection-item">
                                    <a href="{{route('show.country', $country->id)}}"><h5 class="center-align">{{$country->name}}</h5></a>
                                    <div class="row">
                                        <img src="{{$country->image}}" alt="" class="col s12">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="row">
                <h5 class="center-align">Your recent comments</h5>
                @if(count($comments) == 0)
                  <p class="center-align red"><i>You have no comments</i></p>
                @else
                  <ul class="collection z-depth-3">
                    @foreach($comments as $comment)
                      <li class="collection-item grey lighten-4 z-depth-3">
                        <h5 class="center-align">{{$comment->title}}</h5>
                        <p class="center-align">Commenting for {{$comment->country->name}}</p>
                        <p class="center-align">{{$comment->body}}</p>
                      </li>
                    @endforeach
                  </ul>
                @endif
            </div>
            <div class="row">
                <h5 class="center-align">Your Articles</h5>
                @if(count($articles) == 0)
                    <p class="center-align red">You have not saved any articles</p>
                @else
                    <ul class="collection z-depth-3">
                        @foreach($articles as $article)
                            <li class="collection-item grey lighten-4 z-depth-3">
                                <h5 class="center-align">{{$article->title}}</h5>
                                <p>{{$article->description}}</p>
                                <small><a href="{{$article->url}}" target="_blank">Read full article</a></small>
                                <small><a href="{{route('article.delete', $article->id)}}" class="right"> Delete</a></small>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

        </div>
        <div class="col s5">
            <p class="center-align">Latests users posts</p>
            @foreach($posts as $post)
                <div class="card grey lighten-4 z-depth-3">
                    <div class="card-content">
                        <span class=" black-text card-title"> <i class="material-icons prefix">account_circle</i> {{ $post->user->email }}</span>
                        <div class="divider"></div>
                        <p class="black-text"> {{ $post->body }}</p>
                        <small class="black-text">{{date('j M, Y H:i', strtotime($post->created_at))}}</strong></small>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
