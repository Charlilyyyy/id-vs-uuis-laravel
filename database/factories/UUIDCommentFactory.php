<?php

namespace Database\Factories;

use App\Models\UuidComment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UuidComment>
 */
class UUIDCommentFactory extends Factory
{

    protected $model = UuidComment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'UUID_id' => function () {
                return \App\Models\Uuid::factory()->create()->id;
            },
            'name' => fake()->name,
            'comments' => fake()->sentence,
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}
