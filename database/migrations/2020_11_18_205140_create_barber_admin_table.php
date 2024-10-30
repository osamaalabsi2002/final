<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarberAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barber_admin', function (Blueprint $table) {
            $table->id();  // Primary Key: id
            $table->string('username', 50);  // Username column with max length 50
            $table->string('email', 50)->unique();  // Email column with max length 50 and unique constraint
            $table->string('full_name', 50);  // Full name column with max length 50
            $table->string('password', 255);  // Password column, hashed, so larger length
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
        Schema::dropIfExists('barber_admin');
    }
}
