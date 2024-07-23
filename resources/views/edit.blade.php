<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',$edit->id)}}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">First Name</label>
            <input type="text" class="form-control" name="FirstName" value="{{$edit->FirstName}}" placeholder="Name">
          </div>

          <div class="form-group col-md-6">
            <label for="LastName">Last Name</label>
            <input type="text" class="form-control" name="LastName" value="{{$edit->LastName}}" placeholder="Last Name">
          </div>

        </div>
        <div class="form-group">
          <label for="Email">Email</label>
          <input type="email" class="form-control" name="Email" value="{{$edit->Email}}" placeholder="abc@company.com">
        </div>
        <div class="form-group">
          <label for="Contact">Contact no</label>
          <input type="text" class="form-control" name="Contact" value="{{$edit->Contact}}" placeholder="03445678910">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Job Title</label>
            <input type="text" class="form-control" name="JobTitle" value="{{$edit->JobTitle}}" >
          </div>
          <div class="form-group col-md-4">
            <label for="text">Address</label>
            <select name="Address" value="{{$edit->Address}}" class="form-control">
              <option selected>Choose...</option>
              <option>Rawalpindi</option>
              <option>Islamabad</option>
            </select>
          </div>

        </div>

        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</body>
</html>
