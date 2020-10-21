<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="row container-fluid">
        <div class="col-md-8 offset-2 p-5">
            <div class="card">
                <div class="card-header">
                    <span style="font-size:30px;"> Update User</span>
                </div>
                <div class="card-body">
                <form method="POST" action="{{url('/user/update/'.$user->id)}}">
                    @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>
        </div>

    </div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>   
</body>

</html>