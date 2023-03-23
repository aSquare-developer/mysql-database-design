<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => self::factoryForModel(User::class),
            'website' => fake()->url,
            'twitter_handle' => fake()->name
        ];
    }
}
