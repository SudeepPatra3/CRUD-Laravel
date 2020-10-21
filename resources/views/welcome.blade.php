<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>CRUD</title>
</head>
<body>
  <h3 class="text-center text-danger pt-5">User Management Application</h3>
    <div class="row container-fluid">
      <div class="col-md-8 offset-2 p-4">
            <div class="card">
                <div class="card-header">
                    <span style="font-size:30px;color:#078dff;">User</span>
                <a class="btn btn-primary float-right" href="{{url('/add-user')}}">+</a>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sl no</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                      <tr>
                        <th>{{$user->id}}</th>
                      <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td><a href="{{url('user/edit/'.$user->id)}}"><i class="far fa-edit text-success"></i></a>&nbsp;
                        <a href="{{url('user/delete/'.$user->id)}}"><i class="fas fa-trash-alt text-success"></i></a></td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                  </div>
              </div>
        </div>

    </div>






    <script src="https://kit.fontawesome.com/dcbc334623.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>   
</body>

</html>