<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\User;
use App\Question;
use App\Reply;
use App\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         factory(User::class,5)->create();
         factory(Category::class,10)->create();
         factory(Question::class,20)->create();
         factory(Reply::class, 50)->create()->each(function ($reply) {
            return $reply->like()->save(factory(Like::class)->make());
        });
    }
}
