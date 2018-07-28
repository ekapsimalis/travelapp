@extends('layouts.master')

@section('title')
    Welcome to your travel app
@endsection

@section('content')


<div class="row" id="myslide">
<div class="slider">
        <ul class="slides">
          <li>
            <a href="{{$news->articles[0]->url}}" target="_blank"><img src="{{$news->articles[0]->urlToImage}}"></a>
            <div class="caption left-align">
              <h3>{{$news->articles[0]->title}}</h3>
              <h5 class="grey-text text-lighten-5">{{$news->articles[0]->description}}</h5>
            </div>
          </li>
          <li>
            <a href="{{$news->articles[1]->url}}" target="_blank"><img src="{{$news->articles[1]->urlToImage}}"></a>
            <div class="caption left-align">
              <h3>{{$news->articles[1]->title}}</h3>
              <h5 class="grey-text text-lighten-5">{{$news->articles[1]->description}}</h5>
            </div>
          </li>
          <li>
            <a href="{{$news->articles[2]->url}}" target="_blank"><img src="{{$news->articles[2]->urlToImage}}"></a>
            <div class="caption left-align">
              <h3>{{$news->articles[2]->title}}</h3>
              <h5 class="grey-text text-lighten-5">{{$news->articles[2]->description}}</h5>
            </div>
          </li>
          <li>
            <a href="{{$news->articles[3]->url}}" target="_blank"><img src="{{$news->articles[3]->urlToImage}}"></a>
            <div class="caption left-align">
              <h3>{{$news->articles[3]->title}}</h3>
              <h5 class="grey-text text-lighten-5">{{$news->articles[3]->description}}</h5>
            </div>
          </li>
        </ul>
      </div>
    </div>

<div class="row">
  <h4 class="center-align">More news</h4>
</div>

<div class="row">
  <div class="card medium z-depth-3 col s4 grey lighten-4 class">
    <div class="card-content">
      <img src="{{$news->articles[4]->urlToImage}}" alt="smt" class="col s12">
      <a href="{{$news->articles[4]->url}}" target="_blank"><h5 class="center-align">{{$news->articles[4]->title}}</h5></a>
      <p>{{$news->articles[4]->description}}</p>
    </div>
  </div>
  <div class="card medium z-depth-3 col s4 grey lighten-4 class">
    <div class="card-content">
      <img src="{{$news->articles[5]->urlToImage}}" alt="smt" class="col s12">
      <a href="{{$news->articles[5]->url}}" target="_blank"><h5 class="center-align">{{$news->articles[5]->title}}</h5></a>
      <p>{{$news->articles[5]->description}}</p>
    </div>
  </div>
  <div class="card medium z-depth-3 col s4 grey lighten-4 class">
    <div class="card-content">
      <img src="{{$news->articles[6]->urlToImage}}" alt="smt" class="col s12">
      <a href="{{$news->articles[6]->url}}" target="_blank"><h5 class="center-align">{{$news->articles[6]->title}}</h5></a>
      <p>{{$news->articles[6]->description}}</p>
    </div>

  </div>
</div>

@endsection