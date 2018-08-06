@extends('layouts.master')

@section('title')
    Admin Panel --- Create Place
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

    <div class="row">
        <div class="container">
            <div class="container">
                <h4 class="center-align">Create Place</h4>
                <div class="row"></div>
                <form action="{{route('post.create.place')}}" method="post">
                    <div class="input-field col s12">
                        <input type="text" name="name" id="name" class="validate">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="information" class="materialize-textarea" name="information"></textarea>
                        <label for="information">Information</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="country_id">
                            <option value="" disabled selected>Choose your option</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                        <label>Chose Country</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="image" id="image" class="validate">
                        <label for="image">Image URL</label>
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light btn col s12">Create Place</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection