<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 10)->create();

        $products = Product::select('id')->get();
        foreach ($products as $product) {
            $product->addMediaFromUrl('https://cdn.pixabay.com/photo/2017/10/02/12/40/rabit-2808713_1280.jpg')->toMediaCollection('products');
        }
    }
}
