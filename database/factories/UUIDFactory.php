<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UUID>
 */
class UUIDFactory extends Factory
{
    protected $model = Uuid::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid,
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
            // 'id' => fake()->uuid,
            // 'created_at' => fake()->dateTime(),
            // 'updated_at' => fake()->dateTime(),
        ];
    }
}
