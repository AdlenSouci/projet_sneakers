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
        Schema::create('pays', function (Blueprint $table) {
            $table->string('nom',60)->nullable(false);
            $table->string('alpha2',2)->nullable(false);
            $table->string('alpha3',3)->primary();
            $table->string('numerique',3)->nullable(false);
            $table->string('iso31662_code',15)->nullable(false);
            
            $table->index('nom');
            $table->index('alpha2');
            $table->index('numerique');
            $table->index('iso31662_code');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pays');
    }
};