@extends('baseview')

@section('content')

<h1>Kategoriat</h1>

<hr/>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                id
            </th>
            <th>
                nimi
            </th>

            <th></th>

        </tr>
    </thead>

    @foreach($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>

        <td>
            <a class="btn btn-primary btn-sm" href="kategoriat/{{$category->id}}/edit">
                <span class="glyphicon glyphicon-edit"></span> Muokkaa
            </a>
        </td>
    </tr>

    @endforeach
</table>
@stop