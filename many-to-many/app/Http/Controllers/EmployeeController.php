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

  // public function edit($id){
  //
  //
  //   return view('', compact());
  // }
  //
  // public function updateTask(Request $request , $id){
  //
  //   $validateData = $request -> validate([
  //       '' => 'required',
  //       '' => 'required',
  //       '' => 'required',
  //       '' => 'required',
  //     ]);
  //
  //   Task::whereId($id) -> update($validateData);
  //   return redirect() -> route('home');
  // }
}
