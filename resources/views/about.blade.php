@extends('layouts.master')

@section('title')
    Contact us 
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('post.feedback') }}" method="post">
                <div class="card" id="contactform">
                    <div class="card-content">
                        <h5 class="center-align">Give us a feedback</h5>
                        <div class="input-field">
                            <input type="text" class="validate" id="title" placeholder="Title" name="title">
                        </div>
                        <div class="input-field">
                            <textarea name="body" id="Body" cols="30" rows="10" class="materialize-textarea" placeholder="Say something about us"></textarea>
                        </div>
                        <div class="input-field">
                            <p>Rate us 1-5</p>
                            <p class="range-field">
                                <input type="range" id="test5" min="1" max="5" name="rating" />
                            </p>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn waves-effect waves-light col s12">Give Feedback</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    
@endsection