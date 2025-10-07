<?php

namespace Database\Seeders;

use Database\Factories\CategoryProductsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categoryIds = DB::table('categories')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();

        $combinations = [];

        foreach ($categoryIds as $categoryId ) {

            foreach ($productIds as $productId) {
                 $combinations[] = [
                    'category_id' => $categoryId,
                    'product_id' => $productId,
                 ];
            }
        }

        shuffle($combinations);

        $numToInsert = rand(20, 40);

        $selectd = array_slice($combinations, 0, min($numToInsert, count($combinations)));

        DB::table('categories_products')->insert($selectd);
    }

}
