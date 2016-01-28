@extends('baseview')

@section('content')

<h1>Muokkaa kohdetta {{ $business->name }}</h1>

<hr/>
@if ($errors->any())
<div class="row">
    <div class="col-md-12 alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach

    </div>
</div>
@endif
<div class="row">
    <div class="col-md-6">

        {!! Form::model($business, ['method' => 'PATCH', 'action' => ['BusinessesController@update', $business->id]]) !!}

        <div class="form-group">

            {!! Form::label('category_id', 'Kategoria:') !!}

            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label('name', 'Kohteen nimi:') !!}

            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('description', 'Kohteen kuvaus:') !!}

            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label('streetAddress', 'Katuosoite:') !!}

            {!! Form::text('streetAddress', null, ['class' => 'form-control', 'onChange' => 'sijoitaKartalle()']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('zipCode', 'Postinumero:') !!}

            {!! Form::text('zipCode', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('city', 'Postitoimipaikka:') !!}

            {!! Form::text('city', null, ['class' => 'form-control', 'onChange' => 'sijoitaKartalle()']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('phone', 'Puhelinnumero:') !!}

            {!! Form::text('phone', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('website', 'Nettisivu:') !!}

            {!! Form::text('website', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('latitude', 'Latitudi:') !!}

            {!! Form::text('latitude', null, ['class' => 'form-control', 'readonly' => 'true']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('longitude', 'Longitudi:') !!}

            {!! Form::text('longitude', null, ['class' => 'form-control', 'readonly' => 'true']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Tallenna', ['class' => 'btn btn-primary']) !!}

        </div>




        {!! Form::close() !!}

    </div>

    <div class="col-md-6">
        <div id="kartta" style="width: 100%; height:500px; margin-top:1.5em;"></div>

    </div>

</div>


@stop

@section('scripts')
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyD2jhh23EW49Tp--c2rydoIbur0wziU1us&language=fi&region=FI">
</script>

<script type="text/javascript">
            var map;
            var geocoder;
            var marker;
            var blat=parseFloat(document.getElementById('latitude').value);
            var blng=parseFloat(document.getElementById('longitude').value);
            function initialize() {
            geocoder = new google.maps.Geocoder();
                    var mapOptions = {
                    center: {lat: blat, lng: blng },
                            zoom: 15
                    };
                    map = new google.maps.Map(document.getElementById('kartta'),
                            mapOptions);
                    marker = new google.maps.Marker({
                    map: map,
                            position: {lat: blat, lng: blng },
                            draggable: true
                    });
                    google.maps.event.addListener(marker, 'dragend', function (evt) {
                    console.log('drop');
                            document.getElementById('latitude').value = "" + evt.latLng.lat();
                            document.getElementById('longitude').value = "" + evt.latLng.lng();
                    });
            }

    function codeAddress(osoite) {
    geocoder.geocode({'address': osoite}, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    map.setCenter(results[0].geometry.location);
            marker.setPosition(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
            document.getElementById('latitude').value = "" + results[0].geometry.location.lat();
            document.getElementById('longitude').value = "" + results[0].geometry.location.lng();
    } else {
    alert('Osoitteen sijoittaminen kartalle ei onnistunut: ' + status);
    }
    });
    }

    function sijoitaKartalle() {
    var katuosoite = document.getElementById('streetAddress').value;
            var paikkakunta = document.getElementById('city').value;
            if (katuosoite != "" && paikkakunta != "")
    {
    var osoite = katuosoite + ", " + paikkakunta;
            codeAddress(osoite);
    }
    }

    google.maps.event.addDomListener(window, 'load', initialize);





</script>




@stop