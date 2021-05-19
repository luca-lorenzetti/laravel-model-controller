@extends('layouts/template_base');

@section('content')

<div class="container">
    
    {{-- Errors --}}
    @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif


    <form action="{{route('movies.store')}}" method="POST">
        @method('POST')
		    @csrf

        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" name="cover_movie" id="url" placeholder="Http://...">
          </div>
          <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" class="form-control" name="titolo" id="titolo" placeholder="Inserisci il titolo">
          </div>
          <div class="form-group">
            <label for="trama">Trama</label>
            <textarea class="form-control" name="trama" id="trama" rows="10" placeholder="Inserisci la trama"></textarea>
          </div>
          <div class="form-group">
            <label for="anno">Anno</label>
      
            <select id="anno" class="form-control" name="anno">
                @for ($i = 1900; $i <= date("Y")+1; $i++)
                    <option value="{{$i}}" {{ $i == date('Y') ? 'selected' : ''}}>{{ $i }}</option>
                @endfor
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
   
      </form>
</div> 
@endsection
