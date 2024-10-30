<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesBookedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_booked', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('appointment_id'); // Foreign key referencing appointments
            $table->unsignedBigInteger('service_id'); // Foreign key referencing services
            $table->timestamps(); // created_at and updated_at

            // Define foreign keys
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_booked');
    }
}
