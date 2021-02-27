<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\User;
use App\Models\Category;
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
        $user = User::all()->random();

        $category_ids = $user->categories->pluck('id')->toArray();
        // add null to end of array because the "category" field can be null.
        $category_ids[] = null;

        return [
            'title' => $this->faker->sentence,
            'body'  => $this->faker->paragraph,
            'user_id' => $user->id,
            'category_id' => $this->faker->randomElement($category_ids),
        ];
    }
}
