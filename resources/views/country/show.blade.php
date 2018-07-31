@extends('layouts.nmaster')

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
        <div class="parallax-container">
            <div class="parallax"><img src="{{ $country->image }}"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s7">
                <h3 class="center-align">{{ $country->name }}</h3>
                <p>{{ $country->description }}</p>
            </div>
            <div class="col s5">
                <div id = "sample" style = "width:580px; height:400px;"><script>loadmap();</script></div>
            </div>
        </div>
        <div class="row">
            <h2 class="center-align">Places to visit in {{ $country->name }}</h2>
        </div>
    </div>
@endsection