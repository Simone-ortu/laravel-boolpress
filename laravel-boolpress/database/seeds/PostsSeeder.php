<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newPost = new Post();

            $newPost->title =  $faker->sentence(3);
            $ifSlugExists = Post::where('slug',$slug)->first();
            $tempSlug = $slug;
            $counter =  1;

            while($ifSlugExists){
                $slug = $tempSlug . '-' . $counter;
                $ifSlugExists = Post::where('slug',$slug)->first();
                $counter++;
            }
            $newPost->slug = $slug;
            $newPost->content = $faker-text();

            $newPost->save();
        }
    }
}
