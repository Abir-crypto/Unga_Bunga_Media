<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)
            ->create()
            ->each(function ($user){
               Post::factory(5)
                ->create(['user_id' => $user->id])
                ->each(function ($post){
                   Comment::factory(3)->create([
                       'post_id'=>$post->id,
                       'user_id'=> rand(1, 8)
                   ]);
                });
            });
    }
}
