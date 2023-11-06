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
        Schema::create('famille', function (Blueprint $table) {
            $table->id();
            $table->string('nom',70)->nullable(false);
            $table->unsignedBigInteger('id_parent');
            $table->timestamps();

            $table->index('nom');
            $table->index('id_parent');
            $table->index('id_parent','nom')->unique();
            $table->foreign('id_parent')->references('id')->on('famille');

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('famille');
    }
};
