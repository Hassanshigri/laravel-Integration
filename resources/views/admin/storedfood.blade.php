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

        <table class="table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                </tr>
                <tbody>
                    @foreach($food as $item)
                    <tr>
                        <td> {{$item->name}} </td>
                        <td> {{$item->price}} </td>
                        <td> {{$item->discription}} </td>
                        <td> <img width="50px" height="50px" src="/foodimage/{{$item->pic}}"> </td>
                        <td> <a href="{{route('edit.food',$item->id)}}" class="btn btn-success btn-sm">EDIT</a>
                            <a href="{{route('food.delete',$item->id)}}"class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </body>
    </html>
@endsection
