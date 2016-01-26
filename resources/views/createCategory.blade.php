@extends('baseview')

@section('content')

<h1>Lisää uusi kategoria</h1>

<hr/>


{!! Form::open(['url' => 'kategoriat']) !!}

<div class="form-group">

{!! Form::label('name', 'Kategorian nimi:') !!}

{!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    
    {!! Form::submit('Lisää kategoria', ['class' => 'btn btn-primary']) !!}
    
</div>




{!! Form::close() !!}


@stop

