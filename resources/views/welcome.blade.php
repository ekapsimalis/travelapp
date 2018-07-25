@extends('layouts.master')

@section('title')
    Welcome to your travel app
@endsection

@section('content')


<div class="row" id="myslide">
<div class="slider">
        <ul class="slides">
          <li>
            <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
    </div>




<div class="container">
<div class="row">
<div class="col s8">
<h4>Explore top news </h4>
<div class="card teal lighten-2">
<div class="card-content">
<img src="{{$news->articles[0]->urlToImage}}" class="col s6" alt="">
<div class="collection-item-avatar">     
<span class="title text-white"><h5>{{$news->articles[0]->title}}</h5></span>
<p class="text-white">{{$news->articles[0]->description}}</p>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection