<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'nom'  => 'Adidas',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'campus',
            'description' => 'Les sneakers Adidas Campus 00s présentent une silhouette basse d’inspiration old school. L’empeigne revêt une superposition d’empiècements en cuir suédé gris, surmontée par des renforts blancs sur le quartier. Retrouvez l’inimitable logo trèfle marqué sur le talon et la languette.',
            'prix_public' => 100.00,
            'prix_achat' => 50.00,



        ]);

        DB::table('articles')->insert([
            'nom'  => 'Nike',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'dunk low sb',
            'description' => 'Conçue pour les parquets, mais adoptée par le streetwear, licône du basket fait son grand retour avec des détails classiques et un style rétro inspiré du terrain. Le col bas rembourré et la semelle intermédiaire en mousse te permettent de déployer ton jeu partout dans le plus grand confort.',
            'prix_public' => 100.00,
            'prix_achat' => 50.00,



        ]);
    }
}
