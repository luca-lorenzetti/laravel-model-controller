<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        h1{
            text-align: center;
            margin: 50px;
        }
        .container{
            width: 80%;
            margin: 0 auto;
        }

        ul{
            list-style: none;
        }

        li{
            margin: 5px;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Lista Films</h1>

    <div class="container">
        <ul>
            @foreach ($movies as $movie)
                <li> 
                    <a href="{{route('movies.show', ['movie' => $movie])}}">{{$movie->titolo}}</a> <br/>
                </li>
            @endforeach
        </ul>
    </div>


</body>
</html>