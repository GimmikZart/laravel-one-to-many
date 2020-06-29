<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;
class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(Employee::class, 10)->make() -> each(function($employee){
            $task= Task::inRandomOrder()-> first();
            $employee -> tasks() -> attach($task);
            $employee -> save();
          });
    }
}
