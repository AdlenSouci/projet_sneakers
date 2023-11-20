<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = array(
			array('id'=>1, 'numerique'=>4, 'alpha2'=>'AF', 'alpha3'=>'AFG', 'nom'=>'Afghanistan', 'nom_gb'=>'Afghanistan')
        );
        DB::table('pays')->insert($countries);   
    }
}
