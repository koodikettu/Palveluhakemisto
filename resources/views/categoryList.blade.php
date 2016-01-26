@extends('baseview')

@section('content')

<h1>Kategoriat</h1>

<hr/>


@foreach($categories as $category)
<p>{{ $category->name }}</p>
@endforeach

@stop