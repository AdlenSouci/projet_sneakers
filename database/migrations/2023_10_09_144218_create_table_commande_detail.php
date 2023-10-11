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
        Schema::create('commande_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quantite_commmande',10)->nullable(false);
            $table->decimal('prix_unitaire_brut',5)->nullable(false);
            $table->decimal('prix_unitaire_net',5)->nullable(false);
            $table->unsignedBigInteger('montant_ht',10)->nullable(false);
            $table->unsignedBigInteger('remise',10)->nullable(false);
            $table->timestamps();


            $table->index('quantite_commmande');
            $table->index('prix_unitaire_brut');
            $table->index('prix_unitaire_net');
            $table->index('montant_ht');
            $table->index('remise');


            $table->foreign('id_clients')->references('id')->on('clients');
            $table->foreign('id_article')->references('id')->on('article');
            $table->foreign('id_num_commande')->references('id')->on('table_commande_entete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_detail');
    }
};
