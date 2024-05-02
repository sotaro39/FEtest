<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => Member::factory(),
            'title' => $this->faker->title(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
