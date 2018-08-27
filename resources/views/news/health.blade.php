@extends('layouts.master')

@section('title')
    News Room--Health
@endsection

@section('content')
    <div class="row"></div>
    <div class="row">       
            <nav>
                    <div class="nav-wrapper blue accent-3">
                        <ul class="left">
                            <li><a href="{{route('news.index')}}">National Geographic News</a></li>
                            <li><a href="{{route('news.science')}}">Science</a></li>
                            <li><a href="{{route('news.health')}}">Health</a></li>
                        </ul>
                    </div>
                 </nav>
    </div>
    <div class="row">
        @foreach($hnews->articles as $article)
            <div class="card small  blue lighten-5">
                <div class="card-content">
                    <img src="{{$article->urlToImage}}" alt="" class="col s5">
                    <a href="{{$article->url}}" target="_blank"><h4 class="center-align">{{$article->title}}</h4></a>
                    <p class="center-align">{{$article->description}}</p>                 
                </div>
                <div class="card-action">
                    @if(DB::table('news')->where([
                        ['title', '=', $article->title],
                        ['user_id', '=', Auth::user()->id]
                    ])->exists())
                        <a href="{{route('news.save')}}" target="_blank" class="waves-effect waves-light btn blue accent-3 disabled col s12">Article saved!</a>
                    @else
                        <form action="{{route('news.save')}}" method="post">
                            <button type="submit" class="waves-effect waves-light btn blue accent-3 col s12">Save for reading later</button>
                            <input type="hidden" name="title" value="{{$article->title}}">
                            <input type="hidden" name="description" value="{{$article->description}}">
                            <input type="hidden" name="url" value="{{$article->url}}">
                            <input type="hidden" name="urlToImage" value="{{$article->urlToImage}}">
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection