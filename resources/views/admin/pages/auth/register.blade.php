<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form method="post" action="{{route('admin.auth.register-post')}}">
        @csrf
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Name</label>
            <input name="name" type="text" class="form-control form-control-solid"
                   placeholder="Enter name" {{old('name')}}>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Email</label>
            <input name="email" type="email" class="form-control form-control-solid"
                   placeholder="Enter email" {{old('email')}}>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Password</label>
            <input name="password" type="password" class="form-control form-control-solid"
                   placeholder="Enter password" {{old('password')}}>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control form-control-solid"
                   placeholder="Enter confirm password" {{old('password_confirmation')}}>
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
