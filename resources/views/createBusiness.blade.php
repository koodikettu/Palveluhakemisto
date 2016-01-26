@extends('baseview')

@section('content')

<h1>Lisää uusi kohde</h1>

<hr/>


{!! Form::open(['url' => 'kohteet']) !!}


<div class="form-group">

{!! Form::label('name', 'Kohteen nimi:') !!}

{!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! Form::label('streetAddress', 'Katuosoite:') !!}

{!! Form::text('streetAddress', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! Form::label('zipCode', 'Postinumero:') !!}

{!! Form::text('zipCode', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! Form::label('city', 'Postitoimipaikka:') !!}

{!! Form::text('city', null, ['class' => 'form-control']) !!}

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

{!! Form::text('latitude', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! Form::label('longitude', 'Longitudi:') !!}

{!! Form::text('longitude', null, ['class' => 'form-control'], ['disabled']) !!}

</div>

<div class="form-group">
    
    {!! Form::submit('Lisää kategoria', ['class' => 'btn btn-primary'], ['disabled']) !!}
    
</div>




{!! Form::close() !!}


@stop