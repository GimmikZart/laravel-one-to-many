<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use App\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index(){
    $employees = Employee::all();
    return view('home', compact('employees'));
  }

  public function show($id){
    $employee = Employee::findOrFail($id);
    return view('show', compact('employee'));
  }

  public function edit($id){
    $employee = Employee::findOrFail($id);
    $locations = Location::all();

    return view('edit', compact('employee','locations'));
  }
  //
  public function update(Request $request , $id){

    $validateData = $request -> validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'dateOfBirth' => 'required',
        'role' => 'required',
        'locations' => 'required'
      ]);

      $employee = Employee::findOrFail($id);

      $employee->locations()->sync($validateData['locations']);


      $employee-> update($validateData);
      


    return redirect() -> route('home');
  }

  public function delete($id){
    $employee = Employee::findOrFail($id);

    $employee -> delete();
    return redirect() -> route('home');
  }
}
