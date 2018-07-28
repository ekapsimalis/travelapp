@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <form action="{{ route('post.login') }}" method="post">
                    <div class="card">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input type="text" class="validate" name="email" id="email">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">create</i>
                                <input type="password" class="validate" name="password" id="password">
                                <label for="password">Password</label>
                            </div>
                            <div class="col s12">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Log In
                                    <i class="material-icons right">send</i>
                                </button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection