<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $new_post = new Post();

            $new_post->title = 'Lorem ' . ($i + 1);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->img = 'https://picsum.photos/id/' . (rand(5, 100)) . '/200/300';
            $new_post->content = 'Lorem ipsum dolor .....';

            $new_post->save();
        }
    }
}
