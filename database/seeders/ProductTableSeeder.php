<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'name' => 'Product #1',
            'detail' => 'Product #1 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #2',
            'detail' => 'Product #2 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #3',
            'detail' => 'Product #3 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #4',
            'detail' => 'Product #4 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #5',
            'detail' => 'Product #5 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #6',
            'detail' => 'Product #6 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #7',
            'detail' => 'Product #7 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #8',
            'detail' => 'Product #8 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #9',
            'detail' => 'Product #9 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #10',
            'detail' => 'Product #10 details'
        ]);
        $product->save();
    }
}
