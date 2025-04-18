<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->enum('brandname', ['ES', 'Bosch', 'Midea', 'Mitsubishi Electic', 'Alpha-innotec', 'Muubrandname', 'Samsung']); // ENUM column in database
            $table->enum('product_type', ['ohk_ohk_soojuspumbad', 'ohk_vesi_soojuspumbad', 'Maasoojuspumbad', 'Katlad', 'Keskküttepliidid', 'Pelletikaminad']); 
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('power')->nullable(); // Nullable, because not every product might have a description.
            $table->string('product_img')->nullable(); // Nullable, because not every product might have an image.
            $table->string('brand_img')->nullable(); // Nullable, because not every product might have a brand image.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
