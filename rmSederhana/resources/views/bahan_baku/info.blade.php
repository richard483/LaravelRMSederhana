<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Bahan Baku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Info Bahan Baku</h1>
   <h2 class="text-center">{{$bahan_baku->name}}</h2>
   <h3 class="text-center">Supplier: {{$bahan_baku->supplier}}</h3>
   <ul>
       <h4>Makanan:</h4>
    @foreach ($bahan_baku->makanan as $food)
       <li>{{$food->name}}</li>
    @endforeach
   </ul>
   <a href="/main/bahan_baku/list" class="btn btn-primary">Go to Bahan Baku List</a>
</body>
</html>