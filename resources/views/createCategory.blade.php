@extends('baseview')

@section('content')

<h1>Lisää uusi kategoria</h1>

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
    <div class="col-md-12">

        {!! Form::open(['url' => 'kategoriat']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Kategorian nimi:') !!}

            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Lisää kategoria', ['class' => 'btn btn-primary']) !!}

        </div>




        {!! Form::close() !!}
    </div>
</div>


@stop

