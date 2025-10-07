<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Ropa caballero', 'Ropa dama', 'Pantalones', 'Accesorios', 'Ropa interior', 'Deportiva'];

        foreach ($categories as $category) {
            Category::factory()->state([
                'name' => $category,
            ])->create();
           
        }
    }
}
