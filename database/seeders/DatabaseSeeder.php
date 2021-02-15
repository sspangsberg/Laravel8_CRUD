<?php

namespace Database\Seeders;

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
        //$this->call(ProductTableSeeder::class);
        \App\Models\Product::factory(20)->create();
        \App\Models\User::factory(10)->create();
    }
}
