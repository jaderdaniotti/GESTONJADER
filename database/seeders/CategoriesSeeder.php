<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $api = Http::get('https://api.escuelajs.co/api/v1/categories');
        $data = $api->json();
        
        foreach ($data as $category)
        {
            Category::create([
                "name" => $category['name'],
            ]);
        }
    }
}
