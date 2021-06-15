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
  <h1 class="text-center">List Bahan Baku</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Supplier</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bahan_baku as $bahan)
          <tr>
            <th scope="row">{{$bahan->id}}</th>
            <td><a href="{{route('bahan_baku.info', $bahan->id)}}">{{$bahan->name}}</a></td>
            <td>{{$bahan->supplier}}</td>
            <td>
              <a href="/main/bahan_baku/edit/{{$bahan->id}}" class="btn btn-success">Edit</a>
                      @if (count($bahan->makanan) === 0)
                      <form action="{{route('bahan_baku.delete', $bahan->id)}}" method ="POST">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete
                        </form>
                      @endif</button>
                      {{-- opsi  hanya tersedia kalau bahan baku sudah tidak memiliki makanan lagi --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/main/bahan_baku" class="btn btn-primary">Go to Bahan Baku Menu</a>
</body>
</html>