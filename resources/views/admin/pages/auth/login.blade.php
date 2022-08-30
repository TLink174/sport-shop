<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="{{route('admin.auth.login-post')}}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1" class="required form-label">Email</label>
            <input name="email" type="email" class="form-control form-control-solid"
                   placeholder="Enter email" {{old('email')}}>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1" class="required form-label">Password</label>
            <input name="password" type="password" class="form-control form-control-solid"
                   placeholder="Enter password" {{old('password')}}>
        </div>

        <div class="mb-10">
            <button class="btn btn-primary btn-sm mr-2 mb-2 mb-lg-0">
                <i class="fa fa-save"></i> Save
            </button>
        </div>
    </form>
</div>

</body>
</html>
