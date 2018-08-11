@extends('layouts.master')

@section('title')
    Continent
@endsection

@section('content')
    <div class="row"></div>
<div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper green accent-4">
                    <ul class="left">
                        <li><a href="{!! route('countries.continents', 'Europe') !!}">Europe</a></li>
                        <li><a href="{!! route('countries.continents', 'Asia') !!}">Asia</a></li>
                        <li><a href="{!! route('countries.continents', 'America') !!}">America</a></li>
                        <li><a href="{!! route('countries.continents', 'Africa') !!}">Africa</a></li>
                        <li><a href="{!! route('countries.continents', 'Australia') !!}">Australia</a></li>
                        <li>||</li>
                        <li><a href="{!! route('countries.popularity') !!}">Sort by Popularity</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    @foreach ($countries as $country)
    <div class="row">
        <div class="col s12">
            <div class="card z-depth-3 grey lighten-4">
                <div class="card-content">
                    <img src="{{ $country->image }}" alt="" class="col s3">
                    <h4>{{ $country->name }}</h4>
                    <p>{{ $country->description }}</p>
                </div>
                <div class="card-action center-align">
                    <a class="waves-effect waves-light btn green accent-4" href="{!! route('show.country', $country->id) !!}">Explore {{ $country->name }}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
