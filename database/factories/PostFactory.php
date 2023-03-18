<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "description" => $this->faker->paragraph(),
            "user_id" => User::factory(),
            "file_path"=>$this->faker->image(),
            "posted_date"=>$this->faker->date(),
        ];
    }
}
