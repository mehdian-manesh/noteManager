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

        \App\Models\Note::All()->each(function ($note) use ($tags){
            $note->tags()->saveMany($tags);
        });
    }
}
