<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();  // Primary Key: id
            $table->string('first_name', 30);  // First Name column with max length 30
            $table->string('last_name', 30);  // Last Name column with max length 30
            $table->string('phone_number', 30);  // Phone number column with max length 30
            $table->string('email', 50);  // Email column with max length 50
            $table->text('description');  // Description text field
            $table->string('image');  // Image field for storing image filename
            $table->timestamps();  // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
