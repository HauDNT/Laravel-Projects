<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Danh sách người dùng
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 15px;
        }
    </style>
</head>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Họ và tên</th>
                <th>CMND/CCCD</th>
                <th>Số điện thoại</th>
                <th>Cập nhật</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Nguyễn Văn A</td>
                <td>0931235674839</td>
                <td>0941246578</td>
                <td>
                    <a href="{{ route('update') }}">Cập nhật</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
