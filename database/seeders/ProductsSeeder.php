<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Category;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $api = Http::get('https://api.escuelajs.co/api/v1/products');
        $data = $api->json();

        foreach($data as $game)
        {
            Product::create([
                'name' => $game['title'],
                'price' => $game['price'],
                'description' => $game['description'],
                'category_id' => $game['category']['id'],
                'stock' => random_int(1, 100),
            ]);

        }
    }
}
