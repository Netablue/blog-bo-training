<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        // $faker = Factory::create();

        // for ($i=0; $i < 25 ; $i++) { 
        //     Article::create([
        //         'title' => $faker->sentence(),
        //         'subtitle' => $faker->sentence(),
        //         'content' => $faker->text($maxNbChars = 600),
        //         'category_id' => Category::inRandomOrder()->first()->id,
        //     ]);
        // }

        Category::get()->each(function($category) {

            \App\Models\Article::factory(5)->create([

                'category_id' => $category->id,
            ]);
        });        
    }
}
