<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_schedule', function (Blueprint $table) {
            $table->id();  // Primary Key: id
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');  // Foreign Key referencing 'employees' table
            $table->tinyInteger('day_id');  // Stores day of the week (0-6)
            $table->time('from_hour');  // Start hour of the schedule
            $table->time('to_hour');  // End hour of the schedule
            $table->timestamps();  // created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_schedule');
    }
}
    