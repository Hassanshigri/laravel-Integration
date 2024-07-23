@extends('admin.parent')

@section('content')


<div class="container">
    <form action="{{route('update.food',$edit->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Food Name</label>
          <input type="text" name="name" class="form-control" value="{{$edit->name}}" id="exampleFormControlInput1" placeholder="Biryani">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Price</label>
          <input type="number" min="0" name="price" class="form-control" name="{{$edit->price}}" id="exampleFormControlInput1" placeholder="Price">
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Upload food picture</label>
            <input type="file" name="image" class="form-control-file" value="{{$edit->image}}" id="exampleFormControlFile1">
        </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Discription</label>
                  <textarea class="form-control" name="description" value="{{$edit->description}}" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>

          <button type="submit" class="btn btn-primary">update</button>

      </form>
    </div>



@endsection
