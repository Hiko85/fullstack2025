<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'id' => 1,
                'name' => 'Crest',
                'website' => 'https://www.crest.com',
                'country_of_origin' => 'USA',
            ],
            [
                'id' => 2,
                'name' => 'Colgate',
                'website' => 'https://www.colgate.com',
                'country_of_origin' => 'USA',
            ],
            [
                'id' => 3,
                'name' => 'Sensodyne',
                'website' => 'https://www.sensodyne.com',
                'country_of_origin' => 'UK',
            ],
            [
                'id' => 4,
                'name' => 'Parodontax',
                'website' => 'https://www.parodontax.com',
                'country_of_origin' => 'UK',
            ],
            [
                'id' => 5   ,
                'name' => 'Tom\'s of Maine',
                'website' => 'https://www.tomsofmaine.com',
                'country_of_origin' => 'USA',
            ]
        ]);
    }
}
