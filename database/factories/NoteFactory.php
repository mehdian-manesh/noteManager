<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = \App\Models\User::pluck('id')->toArray();
        $category_ids = \App\Models\Category::pluck('id')->toArray();
        $category_ids[] = null;
        return [
            'title' => $this->faker->sentence,
            'body'  => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement($user_ids),
            'category_id' => $this->faker->randomElement($category_ids),
        ];
    }
}
