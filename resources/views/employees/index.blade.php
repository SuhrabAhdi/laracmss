<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>{{Session::get('status')}}</h2>
    <h1>{{$title}}</h1>
    <a href="{{route('employee.create')}}">Add employee</a>
    @foreach($employees as $employee)
    <hr>
    <p>{{$employee['id']}}</p>
    <p>{{$employee['fname']}}</p>
    <p>{{$employee['lname']}}</p>
<a href="{{route('employee.show',['employee'=>$employee['id']])}}">Preview</a>&nbsp;
<a href="{{route('employee.edit',['employee'=>$employee['id']])}}">Edit</a>&nbsp;


<form action="{{route('employee.destroy',['employee'=>$employee['id']])}}" method="post">
@csrf
@method('DELETE')
<input type="submit" value="Delete">
</form>
    <hr>
</body>
@endforeach  
</html>