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
            </th>

        </tr>
    </thead>

    @foreach($businesses as $business)
    <tr>
        <td>{{$business->id}}</td>
        <td>{{$business->name}}</td>
        <td>{{$business->category_id}}</td>
        <td>{{$business->streetAddress}}, {{$business->zipCode}} {{$business->city}}</td>
        <td>{{$business->phone}}</td>
        <td><a href="http://{{$business->website}}" target="_blank">{{$business->website}}</a></td>
    </tr>

    @endforeach
</table>
@stop