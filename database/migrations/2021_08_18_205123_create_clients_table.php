<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();  // Primary Key: id
            $table->string('first_name', 30);  // First Name column with max length 30
            $table->string('last_name', 30);  // Last Name column with max length 30
            $table->string('phone_number', 30);  // Phone number column with max length 30
            $table->string('client_email', 50);  // Client email column with max length 50
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
        Schema::dropIfExists('clients');
    }
}
