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
    <h1 class="text-center">Bahan Baku</h1>
        <div class="container">
            <form action="{{route('bahan_baku.update', $bahan_baku->id)}}" method = "POST">
            @csrf
            @method('PATCH')
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input name="name" class="form-control" value="{{$bahan_baku->name}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Supplier</label>
                    <input name="supplier" class="form-control" value="{{$bahan_baku->supplier}}">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/" class="btn btn-primary">Go to main menu</a>
                <a href="/main/bahan_baku/list" class="btn btn-primary">Go to Bahan Baku List</a>
              </form>
        </div>
    </body>
</html>
