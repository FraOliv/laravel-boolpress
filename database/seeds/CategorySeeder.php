<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 40; $i++) {
            $newCategory = new Category();
            $newCategory->genre = $faker->word();
            $newCategory->over18 = $faker->boolean();
         
            $newCategory->save();
        }
    }
}
