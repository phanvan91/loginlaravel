<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <form action="{{url('login')}}" method="post">
                    @csrf
                    <legend>Login</legend>
                    @if($errors->has('errorlogin'))
                        <div class="alert alert-danger">
                            {{$errors->first('errorlogin')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" name="email" id="Email" placeholder="Enter Email"}} value="{{old('email')}}">
                        @if($errors->has('email'))
                            <p style="color:red"> {{$errors->first('email')}} </p>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" id="Password" placeholder="Enter Password">
                        @if($errors->has('password'))
                            <p style="color:red"> {{$errors->first('password')}} </p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="ghinho"><input type="checkbox" name="remember" id="ghinho"> Ghi nhớ</label>
                    </div>
                    <button class="btn btn-info" type="submit">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>

    <scrip src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></scrip>
</body>
</html>