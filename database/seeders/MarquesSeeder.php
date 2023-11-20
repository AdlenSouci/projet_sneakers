<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marques')->insert([
            'nom'  => 'Adidas'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Nike'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Puma'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Reebok'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'New Balance'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Asics'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Mizuno'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Saucony'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Under Armour'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Salomon'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Brooks'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Hoka One One'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'On Running'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Skechers'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Altra'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Dynafit'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'La Sportiva'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Merrell'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Scott'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Topo Athletic'
        ]);
        DB::table('marques')->insert([
            'nom'  => 'Vibram FiveFingers'
        ]);       
    }
}
