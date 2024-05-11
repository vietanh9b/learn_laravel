<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Điền form</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{url('/employee/edit/storeEdit')}}">
        @csrf
        @method('PUT')
        <label for="fname">Tài khoản</label><br>
        <input type="text" id="fname" name="name" placeholder="John" value="{{$employee->name}}"><br>
        <label for="lname">Mật khẩu</label><br>
        <input type="text" id="lname" name="pass" placeholder="*****" value="{{$employee->pass}}"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
