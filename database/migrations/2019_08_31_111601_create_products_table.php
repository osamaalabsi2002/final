<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name_products', 50); // Product name
            $table->string('made_in', 50); // Country or place where the product is made
            $table->string('uses', 50); // Product usage description
            $table->text('products_description'); // Detailed description of the product
            $table->decimal('price', 10, 2); // Product price with 2 decimal places
            $table->string('image1'); // Image 1
            $table->string('image2')->nullable(); // Image 2 (nullable)
            $table->string('image3')->nullable(); // Image 3 (nullable)
            $table->string('image4')->nullable(); // Image 4 (nullable)
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
