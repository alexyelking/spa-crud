<?php

namespace Database\Seeders\lib;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate(
            ['name' => "Pensioner"],
            ['price' => 400]
        );

        Category::updateOrCreate(
            ['name' => "Student"],
            ['price' => 450]
        );

        Category::updateOrCreate(
            ['name' => "Ordinary"],
            ['price' => 500]
        );
    }
}
