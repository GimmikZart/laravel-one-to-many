<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;
class TaskSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 10)->make()
                                ->each(function($task){
            $employee = Employee::inRandomOrder() -> first();
            $task -> employee() -> associate($employee);
            $task -> save();

      });
    }
}
