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
        Schema::create('works', function (Blueprint $table) {
    $table->id();
    $table->string('title');                 // nt "Õhk-vesi soojuspump eramajas"
    $table->string('slug')->unique();        // SEO URL
    $table->string('location')->nullable();  // Harjumaa, Tartumaa
    $table->text('description')->nullable();
    $table->string('system_type')->nullable(); // õhk-vesi, maaküte
    $table->string('brand')->nullable();     // Samsung, Alpha Innotec
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
