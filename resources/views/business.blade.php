@extends('baseview')

@section('content')

<div class="row">
    <div class="col-md-12">

        <h1>{{ $business->name }}</h1>
        <a href="/">Palveluhakemisto</a> > 
        <a href="/kategoriat/{{$business->category->id}}">{{$business->category->name}}</a> >
        {{$business->name}}
    </div>
</div>
<div class="row">

    <div class="col-md-4">
        <div class="infobox">
            <h3>{{ $business->name }}</h3>
            <p>Kategoria: <a href="/kategoriat/{{$business->category->id}}">{{$business->category->name}}</a></p>
            
            <p>
                {{$business->streetAddress}}<br>
                {{$business->zipCode}} {{$business->city}}<br>
                <span class="glyphicon glyphicon-earphone"></span>
                {{$business->phone}}<br>
                <a href="http://{{$business->website}}" target="_blank">{{$business->website}}</a><br>
            </p>
            <p>
                {{$business->description}}
            </p>

            <p>
                Päivitetty: {{$business->updated_at->format('d.m.Y')}}
            </p>

        </div>

    </div>
    <div class="col-md-8">
        <div class="infobox">
            <h3>Kartta</h3>
            <div id="kartta" style="width: 100%; height: 500px;">
            </div>
        </div>

    </div>
</div>





@endsection

@section('scripts')

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyD2jhh23EW49Tp--c2rydoIbur0wziU1us&language=fi&region=FI">
</script>
<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/styledmarker/src/StyledMarker.js"></script>

<script type="text/javascript">



        function initialize() {
        var sijainti = new google.maps.LatLng({{$blat}}, {{$blng}}, false);
                var mapOptions = {
                center: sijainti,
                        zoom: 14
                };
                map = new google.maps.Map(document.getElementById('kartta'),
                        mapOptions);
                var popup = "{{$business->name}}";
                var marker = new StyledMarker(
                {
                styleIcon: new StyledIcon(StyledIconTypes.MARKER, {
                color: "00ff00",
                        text: "" + 1
                }),
                        position: sijainti,
                        map: map,
                        title: popup

                });
        }

google.maps.event.addDomListener(window, 'load', initialize);



</script>



@endsection