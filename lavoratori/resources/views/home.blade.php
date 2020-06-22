@extends('layouts.mainLayout')
@section('content')
  @foreach ($tasks ?? '' as $task)
    <h1>{{$task['name']}}</h1>
    <p>{{$task['description']}}</p>
    <h2>{{$task['deadline']}}</h2>
    <h3>Employee: {{$task -> employee -> firstname}} {{$task -> employee -> lastname}}</h3>

  @endforeach

@endsection
