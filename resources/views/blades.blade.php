@extends('layout.default')

@section('content')
@include('partials.newsletter')
    <h1>Hello {{$name}}</h1>
    @if($login)
    <h2>Welcome to Website dashboard</h2>
    @else
    <h2>Please login to see the dashboard</h2>
    @endif

    @foreach($roots as $root)
    <p> The square root of {{$root}} is {{$root*$root}}</p>
    @endforeach


   <h3>{{number_format(3200.8973,2)}}</h3>
   <h3>{{date('d m, y')}}</h3>

   @php
for($i=0;$i<10;$i++)
echo $i."<br>";
   @endphp
@endsection