<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = \App\Models\User::pluck('id')->toArray();
        return [
            'name' => $this->faker->word,
            'user_id' => $this->faker->randomElement($user_ids),
        ];
    }
}
