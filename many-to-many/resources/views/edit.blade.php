@extends('layouts.main_layout')
@section('content')

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="{{route('update', $employee['id'] )}}" method="post">
    @csrf
    @method('POST')

    <label for="firstname">Firstname:</label>
    <input type="text" name="firstname" value="{{$employee['firstname']}}"> <br>

    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" value="{{$employee['lastname']}}"> <br>

    <label for="dateOfBirth">Date of birth:</label>
    <input type="text" name="dateOfBirth" value="{{$employee['dateOfBirth']}}"> <br>

    <label for="role">Role:</label>
    <input type="text" name="role" value="{{$employee['role']}}"> <br>

    <label for="locations">Locations:</label>
    @foreach ($locations as $location)
      <input type="checkbox" name="locations[]" value="{{$location['id']}}"> {{$location['city']}} <br>
    @endforeach



    <input type="submit" name="UPDATE" value="UPDATE">

  </form>
@endsection
