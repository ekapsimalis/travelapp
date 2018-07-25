@extends('layouts.master')

@section('title')
    SignUp
@endsection

@section('content')
<form action="{{route('post.signup')}}" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" placeholder="Email" name="email" class="validate">
                </div>
                <div class="input-field col s6">
                    <input type="text" placeholder="Password" name="password" class="validate">
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn waves-effect waves-light">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </div>
</form>    
@endsection