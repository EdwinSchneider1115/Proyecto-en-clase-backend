<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    
    public function run(): void
    {

        $category1 = new Category();
        $category1->name = 'Tecnologia';
        $category1->description = 'Productos de tecnología';
        $category1->save();

        $Product1 = new Product();
        $Product1->name = 'Laptop';
        $Product1->description = 'Laptop de alta gama';
        $Product1->price = 1000;
        $Product1->Category_id = $category1->id;
        $Product1->save();

        Category::factory(1000)->create();
        Product::factory(100)->create();
    }
}
