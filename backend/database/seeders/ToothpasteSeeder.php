<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToothpasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('toothpastes')->insert([
            [
                'brand_id' => 1,
                'name' => 'Crest 3D White',
                'weight' => 116,
                'unit' => 'g',
                'is_vegan' => false,
                'stock_quantity' => 50,
                'price' => 4.99,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_id' => 1,
                'name' => 'Crest Pro-Health',
                'weight' => 170,
                'unit' => 'g',
                'is_vegan' => false,
                'stock_quantity' => 30,
                'price' => 5.49,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_id' => 2,
                'name' => 'Colgate Total',
                'weight' => 200,
                'unit' => 'g',
                'is_vegan' => true,
                'stock_quantity' => 40,
                'price' => 3.99,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_id' => 2,
                'name' => 'Colgate Optic White',
                'weight' => 85,
                'unit' => 'g',
                'is_vegan' => true,
                'stock_quantity' => 60,
                'price' => 4.49,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_id' => 3,
                'name' => 'Sensodyne Rapid Relief',
                'weight' => 75,
                'unit' => 'g',
                'is_vegan' => false,
                'stock_quantity' => 25,
                'price' => 6.99,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_id' => 3,
                'name' => 'Sensodyne Pronamel',
                'weight' => 100,
                'unit' => 'g',
                'is_vegan' => false,
                'stock_quantity' => 35,
                'price' => 7.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 4,
                'name' => 'Parodontax Complete Protection',
                'weight' => 75,
                'unit' => 'g',
                'is_vegan' => false,
                'stock_quantity' => 20,
                'price' => 5.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 4,
                'name' => 'Parodontax Whitening',
                'weight' => 100,
                'unit' => 'g',
                'is_vegan' => false,
                'stock_quantity' => 15,
                'price' => 6.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 5,
                'name' => 'Tom\'s of Maine Luminous White',
                'weight' => 113,
                'unit' => 'g',
                'is_vegan' => false,
                'stock_quantity' => 45,
                'price' => 5.29,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 5,
                'name' => 'Tom\'s of Maine Simply White',
                'weight' => 119,
                'unit' => 'g',
                'is_vegan' => false,
                'stock_quantity' => 50,
                'price' => 5.79,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
