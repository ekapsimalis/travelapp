@extends('layouts.master')

@section('title')
    Countries
@endsection

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Search Countries</label>
                </div>
            </div>
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
                <div class="card-action">
                    <a class="waves-effect waves-light btn green accent-4" href="/countries/{{ $country->id }}">Explore {{ $country->name }}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $countries->links() }}
@endsection