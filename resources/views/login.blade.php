@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')

<form action="{{route('post.login')}}" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input type="text" placeholder="Email" name="email" class="validate">
                <label for="email" class="black-text">Email</label>
            </div>
            <div class="input-field col s6">
                <input type="text" placeholder="Password" name="password" class="validate">
                <label for="password" class="black-text">Password</label>
            </div>
        </div>
        <div class="row allign-center">
            <button type="submit" class="btn waves-effect waves-light allign-center">Log In</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
</form> 
    
@endsection