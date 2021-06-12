<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RM Sederhana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="antialiased">
    <h1 class="text-center">Edit Menu</h1>
        <div class="container">
            <form action="{{route('makanan.update', $makanan->id)}}" method="POST">
            @csrf
            @method('PATCH')
                <div class="mb-3">
                  <label class="form-label">Nama makanan</label>
                  <input name="food_name" class="form-control" value ="{{$makanan->name}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Recipe</label>
                    <input name ="food_rec" class="form-control" value ="{{$makanan->recipe}}">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Price</label>
                  <input name="food_price", class="form-control" type="number" value ="{{$makanan->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </body>
</html>
