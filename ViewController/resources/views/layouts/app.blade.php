<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mở cổng yield để gọi thành phần -->
    <title>@yield('title')</title>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <h1>Header</h1>
        </div>
        <div id="wp-content">
            <div id="content">
                @yield('content')
            </div>
            <div id="sidebar">
                @section('sidebar')
                    <p>Khối tìm kiếm</p>
                @endsection
            </div>
        </div>
        <div id="footer">
            <h1>Footer</h1>
        </div>
    </div>
</body>

</html>