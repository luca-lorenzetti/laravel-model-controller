<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <h1>{{$movie->titolo}}</h1>

    <p><strong>Anno: </strong>{{$movie->anno}}</p>
    <p><strong>Trama: </strong>{{$movie->trama}}</p>
    <br/>
    <a href="{{route('movies.index')}}">Torna indietro</a>
</body>
</html>