<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title-page')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            margin: 15px;
        }
        #formInput {
            width: 50vw;
        }
    </style>
</head>
<body>
    <h1>
        @yield('title-form')
    </h1>
    <form action="menu" style="width: 50vw" id="form-content" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Họ và tên</label>
            <input name="fullname" type="text" class="form-control" id="formInput" placeholder="Họ và tên của bạn">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">CMND/CCCD</label>
            <input name="cmnd_cccd" type="text" class="form-control" id="formInput" placeholder="CMND/CCCD">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Số điện thoại</label>
            <input name="sdt" type="text" class="form-control" id="formInput" placeholder="Số điện thoại">
          </div>
          <button style="float: right" type="submit" class="btn btn-primary">
            @yield('btn-content')
        </button>
    </form>
    <div>
        <a href="{{ route('menu') }}">Quay lại trang menu</a>
    </div>
</body>
</html>