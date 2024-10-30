<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('service_name', 100); // Name of the service
            $table->text('service_description')->nullable(); // Description of the service
            $table->decimal('service_price', 8, 2); // Price of the service
            $table->integer('service_duration'); // Duration of the service in minutes
            $table->unsignedBigInteger('category_id')->nullable(); // Foreign key for the category (nullable)
            $table->timestamps(); // created_at and updated_at columns

            // Add foreign key constraint to the category_id field
            $table->foreign('category_id')->references('id')->on('service_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
