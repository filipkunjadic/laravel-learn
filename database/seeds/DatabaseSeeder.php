<?php

use Illuminate\Database\Seeder;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $products = [
        ['name' => 'Awesome product'],
        ['name' => 'Best product ever'],
        ['name' => 'Not so great product']
      ];

      foreach($products as $productData){
        $product = Product::create($productData);
      }
    }
}
