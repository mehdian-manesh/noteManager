<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = \App\Models\User::pluck('id')->toArray();
        return [
            'name' => $this->faker->words(3),
            'user_id' => $this->faker->randomElement($user_ids),
        ];
    }
}
