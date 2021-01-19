<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Katon Atmaja',
            'email' => 'katonatmaja@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Grace Hutasoit',
            'email' => 'gracehutasoit@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Kurnia Sitanggang',
            'email' => 'kurniasitanggang@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            PetshopItemSeeder::class,
        ]);


        // \App\Models\User::factory(10)->create();
    }
}
