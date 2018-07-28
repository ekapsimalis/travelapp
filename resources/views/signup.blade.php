@extends('layouts.master')

@section('title')
    SignUp
@endsection

@section('content')
<div class="container">
        <div class="container">
            <div class="row">
                <form action="{{ route('post.signup') }}" method="post">
                    <div class="card">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input type="text" class="validate" name="email" id="email">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" class="validate" name="username" id="username">
                                <label for="username">Username</label>
                                </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">create</i>
                                <input type="password" class="validate" name="password" id="password">
                                <label for="password">Password</label>
                            </div>
                            <div class="col s12">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Sign Up
                                    <i class="material-icons right">send</i>
                                </button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </div>
                        </div>
                </form>
                <div class="divider"></div>
                <div class="row">
                    <div class="container">
                        <div class="container">
                            <div class="container center-align">
                                <p>Already have an account?</p>
                                <a href="{{ route('login') }}" class="btn waves-effect waves-light">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection