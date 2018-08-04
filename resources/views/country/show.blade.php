@extends('layouts.nmaster')

@section('title')
    {{ $country->name }}
@endsection

@section('head')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHMKDfy6PFdKpQLQv2209hfCD3w0jYvJM"></script>
    {{-- <script src = "https://maps.googleapis.com/maps/api/js?AIzaSyBHMKDfy6PFdKpQLQv2209hfCD3w0jYvJM"></script> --}}
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
                <div class="card medium col s11 z-depth-3 teal lighten-4">
                    <div class="card-content">
                        <h3 class="center-align">
                            {{ $country->name }}
                        </h3>
                        <div class="divider"></div>
                        <p>
                            {{ $country->description }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s5">
                <div class="card col s12 z-depth-3 teal lighten-4">
                    <div class="card-content"></div>
                        <div id = "sample"  style = "width:400px; height:350px;"><script>loadmap();</script></div>
                    </div>
                </div>
            </div>
        </div>

        @if (Auth::guest())
            <div class="row">
                <p class="center-align">
                    Please <strong><a href="{{ route('login') }}">log in</a></strong> to explore beautifull places in {{ $country->name }}, comment about your recent visit and see other people comments
                </p>
            </div>
        @endif
    </div>

    @if (!Auth::guest())
        <div class="row">
            <h3 class="center-align">Interesting places to visit in {{ $country->name }}</h3>
        </div>
        @foreach ($places as $place)
            <div class="row">
                <div class="parallax-container">
                    <div class="parallax"><img src="{{ $place->image }}"></div>
                </div>                
            </div>
            <div class="row">
                <div class="container">
                    <div class="card large col s12 z-depth-3 teal lighten-4">
                        <div class="card-content">
                            <h4 class="center-align">{{ $place->name }}</h4>
                            <p>{{ $place->information }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection