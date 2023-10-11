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
        Schema::create('commande_entete', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date')->nullable(false);
            $table->integer('id_num_commande')->primary();
       
            $table->timestamps();

            $table->index('date');
            $table->index('id_num_commande');
            //problème ici pour id_clients
            $table->foreign('id_clients')->references('id')->on('clients');
            //$table->foreignId('id_clients')->constrained('clients');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_entete');
    }
};
