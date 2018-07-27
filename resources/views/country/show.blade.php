@extends('layouts.master')

@section('title')
    {{ $country->name }}
@endsection

@section('head')
    <script src = "https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function loadmap(){
            var mapOptions = {
                center:new google.maps.LatLng({{ $country->lat }}, {{ $country->lng }} ),
                zoom:6,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', loadMap);
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="row">
                <h3 class="center-align">{{ $country->name }}</h3>
            </div>
            <div class="row">
                <img src="{{ $country->image }}" alt="{{ $country->name }}" class="col s12">
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row">
        <div class="col s12">
            <p>
                {{ $country->description }}
            </p>
        </div>
    </div>
    <div class="divider"></div>

    <div id = "sample" style = "width:580px; height:400px;"><script>loadmap();</script></div>
@endsection