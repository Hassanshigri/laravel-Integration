<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></a>
    <title>Document</title>
</head>
<body>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Job Titile</th>
            <th scope="col">Address</th>
            <th>
            <a href="{{'create'}}"class="btn btn-primary">ADD</a>
            </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($registered as $item)
            <tr>
                <td>{{$item->FirstName}}</td>
                <td>{{$item->LastName}}</td>
                <td>{{$item->Email}}</td>
                <td>{{$item->Contact}}</td>
                <td>{{$item->JobTitle}}</td>
                <td>{{$item->Address}}</td>
                <td> <a href="{{route('edit',$item->id)}}" class="btn btn-success btn-sm">EDIT</a>
                    <a href="{{route('destroy',$item->id)}}"class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
