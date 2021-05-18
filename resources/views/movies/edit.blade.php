@extends('layouts/template_base');

@section('content')


<div class="container">
    <form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">
        @method('PUT')
		@csrf

        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" name="cover_movie" id="url" placeholder="Http://..." value="{{$movie->cover_movie}}">
          </div>
          <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" class="form-control" name="titolo" id="titolo" placeholder="Inserisci il titolo" value="{{$movie->titolo}}">
          </div>
          <div class="form-group">
            <label for="trama">Trama</label>
            <textarea  class="form-control" name="trama" rows="10" id="trama" placeholder="Inserisci la trama"> {{$movie->trama}} </textarea>
          </div>
          <div class="form-group">
            <label for="anno">Anno</label>
      
            <select id="anno" class="form-control" name="anno">
                @for ($i = 1900; $i <= date("Y")+1; $i++)
                <option value="{{$i}}" {{ $i == $movie->anno ? 'selected' : ''}}>{{ $i }}</option>
                @endfor
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Conferma</button>
   
      </form>
</div> 
@endsection
