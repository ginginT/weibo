<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','微博') - 随时随地发现新鲜事</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/imgs/weibo_logo.ico" type="image/x-icon" />
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>
</html>