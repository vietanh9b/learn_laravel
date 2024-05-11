<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="{{url('employee/create')}}">Thêm người dùng</a></button>
    <table border="1">
        <thead>
            <th>#</th>
            <th>Tài khoản</th>
            <th>Mật khẩu</th>
            <th>Ngày tạo</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>1</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->pass}}</td>
                <td>{{$employee->created_at}}</td>
                <td>
                    <button><a href="{{url('employee/edit',['employee' => $employee])}}">Sửa</a></button>
                </td>
                <td>
                    <button><a href="{{url('employee/delete',['employee' => $employee])}}">Xóa</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>