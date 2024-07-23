@extends('admin.parent')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <form action="{{route('store.food')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Food Name</label>
          <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Biryani">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Price</label>
          <input type="number" min="0" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Upload food picture</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Discription</label>
                  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>

          <button type="submit" class="btn btn-primary">Add</button>

      </form>
    </div>

</body>
</html>
@endsection
