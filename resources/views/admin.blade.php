@extends('layouts.master')

@section('title')
    Admin Panel
@endsection

@section('content')
    <div class="row"></div>
    <nav class="center-align">
        <div class="nav-wrapper grey darken-1">
            <ul class="center">
                <li><a href="{{route('admin')}}">Feedbacks</a></li>
                <li><a href="{{route('admin.createc')}}">Create Country</a></li>
                <li><a href="{{route('admin.createp')}}">Create Place</a></li>
                <li><a href="{{route('admin.users')}}">Users</a></li>
            </ul>
        </div>
    </nav>

    <h4 class="center-align">Feedbacks</h4>
    <h5 class="center-align">Average rating: {{$score}}</h5>

    <ul class="collection">
        @foreach($feedbacks as $feedback)
            <li class="collection-item">
                <h5>{{ $feedback->title }}</h5>
                <p>{{$feedback->body}}</p>
                <p>Rating: {{$feedback->rating}}</p>
                <small>Created by: {{$feedback->user->username}}</small>
                <br>
                <small>Created at: {{$feedback->created_at}}</small>
            </li>
        @endforeach
    </ul>
    {{ $feedbacks->links() }}


@endsection