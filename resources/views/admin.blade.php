@extends('baseview')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="infobox">

        <h1>Ylläpito</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="infobox">
            <h2>Kategoriat</h2>
            
            <a class="btn btn-default" href="/kategoriat">Muokkaa</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="infobox">
            <h2>Kohteet</h2>
            
            <a class="btn btn-default" href="/kohteet">Muokkaa</a>
        </div>

    </div>
    
</div>





@endsection



