<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('foods')->insert([
            [
                'food_name' => 'ABCzz',
                'food_brief_description' => 'nsofnoasnfoanssand',
                'food_full_description' => 'dknsknfsanfoasnfosanofnasfpanspfaspf',
                'food_category' => 'Dessert',
                'food_price' => 80000,
                'food_image' => 'aqua.jpg'
            ],
            [
                'food_name' => 'DEFzz',
                'food_brief_description' => 'nsofnoasnfoanssand',
                'food_full_description' => 'dknsknfsanfoasnfosanofnasfpanspfaspf',
                'food_category' => 'Main Dish',
                'food_price' => 180000,
                'food_image' => 'big-king.jpg'
            ],
            [
                'food_name' => 'GHIzz',
                'food_brief_description' => 'nsofnoasnfoanssand',
                'food_full_description' => 'dknsknfsanfoasnfosanofnasfpanspfaspf',
                'food_category' => 'Dessert',
                'food_price' => 280000,
                'food_image' => 'nuggets.jpg'
            ],
            [
                'food_name' => 'JKLzz',
                'food_brief_description' => 'nsofnoasnfoanssand',
                'food_full_description' => 'dknsknfsanfoasnfosanofnasfpanspfaspf',
                'food_category' => 'Dessert',
                'food_price' => 680000,
                'food_image' => 'sprite.jpg'
            ],
        ]);
    }
}
