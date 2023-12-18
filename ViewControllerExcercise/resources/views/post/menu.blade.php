<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body>
    <ul>
        <li>
            <a href="{{ route('show') }}">Xem danh sách người dùng</a>
        </li>
        <li>
            <a href="{{ route('insert') }}">Thêm người dùng mới</a>
        </li>
        {{-- <li>
            <a href="{{ route('update') }}">Cập nhật thông tin</a>
        </li> --}}
        {{-- <li>
            <a href="{{ route('delete') }}">Xóa người dùng</a>
        </li> --}}
    </ul>
</body>
</html>