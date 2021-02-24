<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newPost = new Post();
            $newPost->author = $faker->name();
            $newPost->title = $faker->sentence(5);
            $newPost->body = $faker->text();
            $newPost->category = $faker->word();
            // $newPost->created_at = $faker->date();
            // $newPost->updated_at = $faker->date();
            $newPost->save();
        }
    }
}
