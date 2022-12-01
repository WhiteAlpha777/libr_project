<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Book</title>
</head>
<body>
<div class="container">
    <a href="{{route('book.index')}}" class="btn btn-success btn-sm  mb-1">Library</a>
    <a href="{{route('category.index')}}" class="btn btn-warning btn-sm  mb-1">Category</a><br>
    @yield('content')
</div>
</body>
</html>
