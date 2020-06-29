<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('task', function (Blueprint $table) {
          $table->foreign('employee_id', 'task_employee_fk')
                ->references('id')
                ->on('employee')
                ->onDelete('cascade');
      });

      Schema::table('employee_location', function (Blueprint $table) {

          $table->foreign('employee_id', 'employee_location_employee_fk')
                ->references('id')
                ->on('employee');

          $table->foreign('location_id', 'employee_location_location_fk')
                ->references('id')
                ->on('locations');
      });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('task', function (Blueprint $table) {
          $table->dropForeign('task_employee_fk');
          $table->dropForeign('employee_location_employee_fk');
          $table->dropForeign('employee_location_task_fk');
      });
    }
}
