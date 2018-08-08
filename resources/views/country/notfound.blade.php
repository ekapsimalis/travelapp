@extends('layouts.master')

@section('title')
    404 Not Found
@endsection

@section('content')
    <div class="row">
        <h1 class="center-align">404</h1>
        <h3 class="center-align">Page Not Found</h3>
    </div>
    <div class="row">
        <div class="col s12">
            <img src="https://www.bankerinthesun.com/wp-content/uploads/2014/11/Travel-Depressed-Backpacker.jpg" alt="">
            <h5 class="center-align">For all the places you could go, you landed here?</h5>
            <a href="{{route('home')}}" class="waves-effect waves-light btn col s12">Take me HOME</a>
        </div>
    </div>
@endsection