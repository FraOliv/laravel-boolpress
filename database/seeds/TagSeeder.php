<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 40; $i++) {
            $newTag = new Tag();
            $newTag->name = $faker->name();
            $newTag->views = $faker->numberBetween(0, 500000);
            $newTag->shares = $faker->numberBetween(0, 500000);
            $newTag->topic = $faker->word();

            $newTag->save();
        }
    }
}
