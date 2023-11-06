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
        Schema::create('tva', function (Blueprint $table) {
            $table->id();
            $table->decimal('taux_tva',5,2)->nullable(false);
           
            $table->timestamps();

            $table->index('taux_tva');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tva');
    }
};
    