<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Note;
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
        Tag::factory(14)->create();

        Note::All()->each(function ($note) {
            $tags = $note->user->tags;
            $note->tags()->saveMany($tags);
        });
    }
}
