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
        Schema::create('cocktail_ingredient', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cocktail');
            $table->unsignedBigInteger('id_ingrediente');

            $table->primary(['id_cocktail', 'id_ingrediente']);

            $table->foreign('id_cocktail')
                  ->references('id')->on('cocktails')
                  ->onDelete('cascade');

            $table->foreign('id_ingrediente')
                  ->references('id')->on('ingredientes')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktail_ingredient');
    }
};
