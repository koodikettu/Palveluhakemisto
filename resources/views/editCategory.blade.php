@extends('baseview')

@section('content')

<h1>Muokkaa kategoriaa {{ $category->name }}</h1>

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

        {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoriesController@update', $category->id]]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Kategorian nimi:') !!}

            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Tallenna', ['class' => 'btn btn-primary']) !!}

        </div>




        {!! Form::close() !!}
    </div>
</div>


@stop