<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <a href="{{route('home',['name'=>'Milestone'])}}">Home</a>|
    <a href="">Services</a>|
    <a href="{{route('about')}}">About us</a>|
    <a href="">Contact us</a>
    <hr>
    </div>
<div>
@yield('content')
</div>
<div>
<hr>
<p><Strong>Copyright 2020 - The laracms</Strong></p>
</div>
</body>
</html>