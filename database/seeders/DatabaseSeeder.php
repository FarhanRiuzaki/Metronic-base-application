<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        if(env('SEEDER_FIIRST')){
            $this->call([
                PermissionTableSeeder::class,
                UserSeeder::class,
            ]);

            Product::factory()
            ->count(50)
            ->create();
        }
    }
}
