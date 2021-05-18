<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    
<div class="container">
    <h1>Lista Films</h1>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Cover</th>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
          </tr>
        </thead>
        <tbody>
          {{-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
          </tr> --}}
          @foreach ($collection as $item)
              
          @endforeach


        </tbody>
      </table>
</div>


</body>
</html>