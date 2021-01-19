<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetshopItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petshop_items')->insert([
            'category' => 'pet',
            'name' => 'Thomas',
            'price' => 100,
            'picture' => 'images/2171.jpg',
            'qty' => '1',
            'age' => 3,
            'gender' => 'jantan',
        ]);

        DB::table('petshop_items')->insert([
            'category' => 'pet',
            'name' => 'Tabby',
            'price' => 100,
            'picture' => 'images/18961869.jpg',
            'qty' => '1',
            'age' => 3,
            'gender' => 'betina',
        ]);

        DB::table('petshop_items')->insert([
            'category' => 'food',
            'name' => 'Cat\'s food',
            'price' => 10,
            'picture' => 'images/cat-food.jpg',
            'qty' => '10',
            // 'age' => 3,
            // 'gender' => 'betina',
        ]);
    }
}
