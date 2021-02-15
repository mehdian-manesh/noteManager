<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = \App\Models\Tag::factory(10)->create();

        \App\Models\User::All()->each(function ($user) use ($tags){
            $user->tags()->saveMany($tags);
        });
    }
}
