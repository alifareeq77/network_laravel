<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::factory(),
            "post_id"=>Post::factory(),
            "commented_date"=>$this->faker->date(),
            "comment"=>$this->faker->paragraph(),
        ];
    }
}
