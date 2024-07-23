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
    <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Food Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Biryani">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Price</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Discription</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Upload food picture</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>

          <button type="submit" class="btn btn-primary">Add</button>

      </form>
    </div>

</body>
</html>
@endsection
