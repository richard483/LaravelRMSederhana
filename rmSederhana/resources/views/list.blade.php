<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center">List Sederhana</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Receipe</th>
            <th scope="col">Price</th>
            <th scope="col">Bahan Baku</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach($makanan as $food)
          <tr>
            <th scope="row">{{$food->id}}</th>
            <td>{{$food->name}}</td>
            <td>{{$food->recipe}}</td>
            <td>{{$food->price}}</td>
            <td>{{$food->bahanBaku->name}}</td>
            <td>
                <a href="/main/edit/{{$food->id}}" class="btn btn-success">Edit</a>
                <form action="{{route('makanan.delete', $food->id)}}" method ="POST">
                @csrf 
                @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/" class="btn btn-primary">Go to main menu</a>
</body>
</html>