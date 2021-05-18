@extends('layouts.base');

@section('content')
<div class="container">
    <h1>{{$movie->titolo}}</h1>
    
    <p><strong>Anno: </strong> {{$movie->anno}}</p>
    <p><strong>Trama: <br/> </strong>{{$movie->trama}}</p>
    <a href="{{route('movies.index')}}">Torna indietro</a>
</div> 
@endsection

