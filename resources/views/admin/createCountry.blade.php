@extends('layouts.master')

@section('title')
    Admin Panel -- Create Country
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

    <div class="row"></div>
    <div class="container">
        <div class="container">
            <h4 class="center-align">Create Country</h4>
            <div class="row"></div>
            <form action="{{route('post.create.country')}}" method="post">
                <div class="input-field col s12">
                    <input type="text" name="name" id="name" class="validate">
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="image" id="image" class="validate">
                    <label for="image">Image URL</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="continent" id="continent" class="validate">
                    <label for="continent">Continent</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="population" id="population" class="validate">
                    <label for="population">Population</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="description" class="materialize-textarea" name="description"></textarea>
                    <label for="description">Description</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="lat" id="lat" class="validate">
                    <label for="lat">Latitude</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="lng" id="lng" class="validate">
                    <label for="lng">Longitude</label>
                </div>
                <button type="submit" class=" center-align waves-effect waves-light btn">Create Country</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    <div class="row"></div>
@endsection