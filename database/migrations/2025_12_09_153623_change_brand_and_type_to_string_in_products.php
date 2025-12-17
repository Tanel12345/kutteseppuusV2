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
       Schema::table('products', function (Blueprint $table) {
        $table->string('brandname')->change();
        $table->string('product_type')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
        $table->enum('brandname', ['ES', 'Bosch', 'Midea', 'Mitsubishi Electic', 'Alpha-innotec', 'Muubrandname', 'Samsung'])->change();
        $table->enum('product_type', ['ohk_ohk_soojuspumbad', 'ohk_vesi_soojuspumbad', 'Maasoojuspumbad', 'Katlad', 'Keskküttepliidid', 'Pelletikaminad'])->change();
    });
    }
};
