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
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_famille')->nullable(false);
            $table->unsignedBigInteger('id_marque')->nullable(false);
            $table->string('modele', 70)->nullable(false);
            $table->text('description')->nullable(true);

            $table->string('couleur', 60)->nullable(false);
            $table->decimal('prix_public', 9, 2)->nullable(false);
            $table->decimal('prix_achat', 9, 2)->nullable(false);           

            $table->timestamps();

            $table->index('modele');
            $table->index('id_marque');
            $table->index('couleur');
            $table->index('prix_public');
            $table->index('id_famille');
            
            
            

            $table->foreign('id_marque')->references('id')->on('marque');
            $table->foreign('id_famille')->references('id')->on('famille');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};