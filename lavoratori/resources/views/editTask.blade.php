@extends('layouts.mainLayout')
@section('content')

  <form class="" action="{{route('updateTask', $task['id'])}}" method="post">
    @csrf
    @method('POST')

    <label for="name">name:</label>
    <input type="text" name="name" value="{{$task['name']}}"> <br>

    <label for="description">description:</label>
    <input type="text" name="description" value="{{$task['description']}}"> <br>

    <label for="deadline">deadline:</label>
    <input type="text" name="deadline" value="{{$task['deadline']}}"> <br>

    <label for="employee_id">employee:</label>
    <select class="" name="employee_id">
      @foreach ($employes as $employee)
        <option value="{{$employee['id']}}"
        @if ($employee['id'] == $task -> employee_id)
          selected
        @endif
        >{{$employee['name']}} {{$employee['lastname']}}</option>
      @endforeach
    </select>


    <input type="submit" name="submit" value="UPDATE"> <br>

  </form>

@endsection
