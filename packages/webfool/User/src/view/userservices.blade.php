<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>This is from User service</h1>

    {{-- <form method="POST" action="" class="form-group">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="email">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Submit</button>
    </form> --}}

    <div class="container">


        <div>
            <form method="POST" action="{{route('user.post')}}">
                @csrf

                <div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                  </div>
                <div class="mb-3">
                  <label for="InputName" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="name" required>

                </div>
                <div class="mb-3">
                  <label for="InputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>

                </div>
                <div class="mb-3">
                  <label for="InputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>

        <div class="mt-3" >
            <h3 class="mt-3">User Info :</h3>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($userInfo as $user)
                    <tr>
                        <th scope="row">{{$user['id']}}</th>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['created_at']}}</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                      </tr>

                    @endforeach

                </tbody>
              </table>

        </div>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
