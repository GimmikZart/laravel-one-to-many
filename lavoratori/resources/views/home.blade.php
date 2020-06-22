@extends('layouts.mainLayout')
@section('content')
  @foreach ($tasks as $task)
    <a href="{{route('editTask', $task['id'])}}"><h1>{{$task['name']}}</h1></a>

    <p>{{$task['description']}}</p>
    <h2>{{$task['deadline']}}</h2>
    <h3>Employee: {{$task -> employee -> firstname}} {{$task -> employee -> lastname}}</h3>



  @endforeach

@endsection
