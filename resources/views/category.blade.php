@extends('baseview')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="infobox">

            <h1>{{ $category->name }}</h1>
            <a href="/">Palveluhakemisto</a> > {{ $category->name }}
        </div>
    </div>
</div>
<div class="row">
    @if (count($businessList))
    <div class="col-md-6">
        <div class="infobox">
            <h3>Kartta</h3>
            <div id="kartta" style="width: 100%; height: 500px;">
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="infobox">
            <h2>Yritykset</h2>
            @for($i=0;$i<count($businessList);$i++)
                <h3>{{ $i + 1 }}. <a href="/kohteet/{{ $businessList[$i]->id }}"> {{ $businessList[$i]->name }}</a></h3>
                <p>
                    {{ $businessList[$i]->streetAddress}}<br>
                    <small>Kategoria: <a href="/kategoriat/{{ $businessList[$i]->category->id }}"> {{ $businessList[$i]->category->name }}</a></small>
                </p>
                @endfor
        </div>
    </div>
    @else
    <div class="col-md-12">
        <h3>Tässä kategoriassa ei ole kohteita</h3>
    </div>
    @endif
</div>





@endsection

@section('scripts')

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyD2jhh23EW49Tp--c2rydoIbur0wziU1us&language=fi&region=FI">
</script>
<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/styledmarker/src/StyledMarker.js"></script>

<script type="text/javascript">
var map;
var koord;
var geocoder;
var markers = [];
var bounds = new google.maps.LatLngBounds();
var data = '{!! $businessList !!}';
var karttadata = JSON.parse(data);

console.log(karttadata);

for (var i = 0; i < karttadata.length; i++) {
    if (karttadata[i].latitude != null && karttadata[i].longitude != null) {
        if (karttadata[i].latitude != 0 || karttadata[i].longitude != 0) {
            console.log(karttadata[i].latitude + " " + karttadata[i].longitude);
            koord = new google.maps.LatLng(karttadata[i].latitude, karttadata[i].longitude, false);
            console.log(koord);
            bounds.extend(koord);
        }
    }
    console.log(bounds);
}


function initialize() {
    var mapOptions = {
        center: bounds.getCenter(),
        zoom: 8
    };
    console.log('initialize');
    map = new google.maps.Map(document.getElementById('kartta'),
            mapOptions);
    console.log('bounds:' + bounds);
    map.fitBounds(bounds);

    var listener = google.maps.event.addListener(map, "idle", function () {
        console.log('idle');
        if (map.getZoom() > 15)
            map.setZoom(15);
        google.maps.event.removeListener(listener);
    });

    console.log('silmukka');
    for (var i = 0; i < karttadata.length; i++) {
        console.log('karttadata' + i)
        if (karttadata[i].latitude != null && karttadata[i].longitude != null) {
            if (karttadata[i].latitude != 0 || karttadata[i].longitude != 0) {

                var popup = karttadata[i].name;
                koord = new google.maps.LatLng(karttadata[i].latitude, karttadata[i].longitude, false);
                console.log('marker');
//                markers.push(new google.maps.Marker({
//                    map: map,
//                    position: koord,
//                    title: popup
//
//                }));
                markers.push(new StyledMarker(
                        {
                            styleIcon: new StyledIcon(StyledIconTypes.MARKER, {
                                color: "00ff00",
                                text: "" + (i + 1)
                            }),
                            position: koord,
                            map: map,
                            title: popup

                        }));
            }
        }

    }
}
google.maps.event.addDomListener(window, 'load', initialize);



</script>



@endsection