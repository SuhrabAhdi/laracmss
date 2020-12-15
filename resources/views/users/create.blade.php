<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    .error_message{
        border:1px solid red;
    }
    .green_message{
        border:1px solid green;
    }
    </style>
</head>
<body>
    <h1>{{$title}}</h1>

    <form action="{{route('users.create')}}" method="post">
    @include('users.error')
    @csrf
    <p>Username:</p>
    <input type="text" class="{{$errors->first('username')? 'error_message':'green_message'}} " name="username" id="" value="{{old('username')}}"><br>
    <span style="color:brown">{{$errors->first('username')}}</span>
    <p>Email</p>
    <input type="email" name="email" class="{{$errors->first('email')? 'error_message':''}} " id="" value="{{old('email')}}"><br>
    <span style="color:brown" >{{$errors->first('email')}}</span>
    <p>Password</p>
    <input type="password" name="password"  class="{{$errors->first('password')? 'error_message':''}} " value="{{old('password')}}"><Br>
    <span style="color:brown">{{$errors->first('password')}}</span>
    <br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>