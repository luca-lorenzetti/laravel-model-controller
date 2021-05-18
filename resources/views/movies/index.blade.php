@extends('layouts/template_base');

@section('content')
<div class="container">
    <h1>Lista Films</h1>


    <table class="table">
        <a href="{{route('movies.create')}}"><button type="button" class="btn btn-success mt-5 mb-1">Aggiungi Film</button></a>
        <thead class="thead-dark">
          <tr>
            <th scope="col">Cover</th>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th class="text-right" scope="col"><i class="far fa-edit"></i></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td scope="col"><img src="{{$movie->cover_movie}}" alt="cover-movie"></td>
                    <td scope="col">{{$movie->titolo}}</td>
                    <td scope="col">{{$movie->anno}}</td>
                    <td class="text-right"scope="col">
                        <a href="{{route('movies.edit', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        {{-- <a href="{{route('movies.destroy', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-danger">Elimina</button></a> --}}
                        <a href="{{route('movies.show', ['movie' => $movie->id])}}"><button type="button" class="btn btn-success">Visualizza</button></a>
                        <form action="{{route('movies.destroy', [ 'movie' => $movie->id ])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
          
            @endforeach
        </tbody>
      </table>
      @if ( session('message') )
        <div class="alert alert-success" >
            {{ session('message') }}
        </div>
    @endif
</div> 
@endsection

