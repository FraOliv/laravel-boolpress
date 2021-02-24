<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newArticle = new Article();
            $newArticle->title = $faker->sentence(3);
            $newArticle->category_id =$faker->numberBetween(1, 25);
            $newArticle->subtitle = $faker->sentence(10);
            $newArticle->author = $faker->name();
            $newArticle->body = $faker->paragraph();
            $newArticle->reading_time = $faker->randomDigitNotNull();
            $newArticle->save();
        }
        //
    }
}
