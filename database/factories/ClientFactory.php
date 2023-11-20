<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),

            $table->date('date_de_naissance')->nullable(true);
            $table->string('adresse', 100)->nullable(false);
            $table->string('cp', 15)->nullable(false);
            $table->string('ville', 70)->nullable(false);
            $table->string('pays', 3)->nullable(false)->default('FRA');
            $table->string('adresse2', 100)->nullable(true);
            $table->string('cp2', 15)->nullable(true);
            $table->string('ville2', 70)->nullable(true);
            $table->string('pays2', 3)->nullable(true)->default('FRA');
            $table->enum('sexe', ['Femme', 'Homme', 'Autre'])->nullable(true);
            $table->string('telephone', 20)->nullable(true);
            $table->string('email', 100)->nullable(false)->unique();
            $table->string('mot_de_passe', 190)->nullable(false);
            'title' => $this->faker->words(5, true),
            'body' => $this->faker->sentence(45),
            'likes' => $this->faker->randomNumber(5),
            'author' => $this->faker->name(),
            'draft' => $this->faker->boolean()
        ];
    }
}
