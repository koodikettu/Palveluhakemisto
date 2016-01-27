@extends('baseview')

@section('content')

<h1>Kohteet</h1>

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
            <th>
                kategoria
            </th>
            <th>
                osoite
            </th>
            <th>
                puhelin
            </th>
            <th>
                nettisivu
            </th
            <th></th>

        </tr>
    </thead>

    @foreach($businesses as $business)
    <tr>
        <td>{{$business->id}}</td>
        <td>{{$business->name}}</td>
        <td>{{$business->category->name}}</td>
        <td>{{$business->streetAddress}}, {{$business->zipCode}} {{$business->city}}</td>
        <td>{{$business->phone}}</td>
        <td><a href="http://{{$business->website}}" target="_blank">{{$business->website}}</a></td>
        <td>
            <a class="btn btn-primary btn-sm" href="kohteet/{{$business->id}}/edit">
                <span class="glyphicon glyphicon-edit"></span> Muokkaa
            </a>
        </td>
        <td>
            {!! Form::open(['url' => 'kohteet/' . $business->id . '/delete']) !!}
                <button class="btn btn-danger btn-sm" type="submit">
                    <span class="glyphicon glyphicon-trash"></span> Poista
                </button>
            {!! Form::close() !!}
            
            
           
        </td>
    </tr>

    @endforeach
</table>

<a class="btn btn-primary" href="kohteet/uusi">Uusi kohde</a>
@stop