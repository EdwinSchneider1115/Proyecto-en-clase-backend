<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $category1 = new Category();
        $category1->name = 'Tecnologia';
        $category1->description = 'Productos de tecnología';
        $category1->save();

        Category::factory(1000)->create();
    }
}
