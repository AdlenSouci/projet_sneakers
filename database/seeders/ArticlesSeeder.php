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
            'prix_public' => 120.00, // Mettez le prix réel
            'prix_achat' => 60.00,  // Mettez le prix réel
        ]);
        
        DB::table('articles')->insert([
            'nom'  => 'Nike',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'dunk low sb',
            'description' => 'Conçue pour les parquets, mais adoptée par le streetwear, licône du basket fait son grand retour avec des détails classiques et un style rétro inspiré du terrain. Le col bas rembourré et la semelle intermédiaire en mousse te permettent de déployer ton jeu partout dans le plus grand confort.',
            'prix_public' => 150.00, // Mettez le prix réel
            'prix_achat' => 75.00,  // Mettez le prix réel
        ]);
        
        DB::table('articles')->insert([
            'nom'  => 'Nike',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'dunk low valentine day',
            'description' => 'La Nike Dunk Low Retro PRM Valentines Day (2023) affiche une base en cuir bordeaux qui laisse apparaître des superpositions de cuir blanc cassé. Sur les côtés, un swoosh rose vient apporter une touche colorée à lensemble. Le tout se laisse sublimer par une semelle crème à loutsole assortie qui finalise le design.',
            'prix_public' => 160.00, // Mettez le prix réel
            'prix_achat' => 80.00,  // Mettez le prix réel
        ]);
        
        DB::table('articles')->insert([
            'nom'  => 'Nike',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'dunk low panda',
            'description' => 'La Nike Dunk Low Black White arbore une tige en cuir blanc, rehaussée par des empiècements en cuir noir pour un contraste tout en sobriété. On retrouve un branding NIKE sur la languette et loutsole. Le jeu de couleur Black & White, aussi appelé "Panda", se poursuit également sur les semelles.',
            'prix_public' => 140.00, // Mettez le prix réel
            'prix_achat' => 70.00,  // Mettez le prix réel
        ]);
        
        DB::table('articles')->insert([
            'nom'  => 'Nike',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'air max patta',
            'description' => 'La Nike Air Max 1 Patta White Grey présente une base en mesh gris complétée par des superpositions de cuir blanc aux détails craquelés. On retrouve notamment le fameux mudguard ondulé en forme de vagues, signature de la collection. Un mini-swoosh ainsi quune semelle crème viennent finaliser le design épuré.',
            'prix_public' => 180.00, // Mettez le prix réel
            'prix_achat' => 90.00,  // Mettez le prix réel
        ]);
        
        DB::table('articles')->insert([
            'nom'  => 'Adidas',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'yeezy',
            'description' => 'Pour ce dernier coloris annuel, Adidas met complètement à jour son emblématique silhouette et dévoile la Yeezy Boost 350 V2 Static, en version classique ou Reflective. On retrouve, comme sur les modèles précédents, un upper en Primeknit métallisé, partagé entre du gris clair et du blanc.',
            'prix_public' => 250.00, // Mettez le prix réel
            'prix_achat' => 125.00,  // Mettez le prix réel
        ]);
        
        DB::table('articles')->insert([
            'nom'  => 'new balance',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => '574',
            'description' => 'Cette New Balance 574 Black White (2022) présente une base en mesh noir, accompagnée de superpositions en daim ton sur ton. On distingue également un empiècement en daim beige sur chaque côté de la chaussure tandis que le heel tab se pare de cuir blanc pour saccorder à la midsole. Une touche de TPU gris équipe le talon alors que le "N" latéral se met en évidence grâce à un contour en cuir blanc. ',
            'prix_public' => 130.00, // Mettez le prix réel
            'prix_achat' => 65.00,  // Mettez le prix réel
        ]);
        
            
        

        DB::table('articles')->insert([
            'nom'  => 'Nike',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'Off-White x Air Jordan 1',
            'description' => 'La collaboration emblématique entre Off-White et Nike, l\'Air Jordan 1 arbore un design unique avec des détails de conception distinctifs de Virgil Abloh.',
            'prix_public' => 500.00,
            'prix_achat' => 250.00,
        ]);
        
        DB::table('articles')->insert([
            'nom'  => 'New Balance',
            'id_famille' => 1,
            'id_marque' => 1,
            'modele' => 'New Balance 990v5',
            'description' => 'La New Balance 990v5 est reconnue pour son confort exceptionnel et son design intemporel, en particulier dans des coloris classiques comme le gris.',
            'prix_public' => 150.00,
            'prix_achat' => 75.00,
        ]);
        
        DB::table('articles')->insert([
            'nom'  => 'Asics',
            'id_famille' => 1,
            'id_marque' => 2,
            'modele' => 'Asics Gel-Lyte III "CLOT"',
            'description' => 'Une collaboration spéciale entre Asics et CLOT, la Gel-Lyte III présente des détails de conception uniques et des matériaux de haute qualité.',
            'prix_public' => 200.00,
            'prix_achat' => 100.00,
        ]);


    }
}
