@extends('layouts.main_layout')
@section('content')
  <h1>IMPIEGATO:</h1>
  <h1>Nome: {{$employee['firstname']}}</h1>
  <h1>Cognome: {{$employee['lastname']}}</h1>
  <h1>Anno di nascita: {{$employee['dateOfBirth']}}</h1>
  <h1>Ruolo: {{$employee['role']}}</h1>

  <h1>TASKS:</h1>
  <ul>
    @foreach ($employee -> tasks as $task)
      <li>
        {{$task -> name}} : {{$task -> description}}. (<b>DEADLINE:</b> {{$task -> deadline}})
      </li>
    @endforeach
  </ul>
@endsection
