<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\IdComment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IdComment>
 */
class IDCommentFactory extends Factory
{
    protected $model = IdComment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID_id' => function () {
                return \App\Models\Id::factory()->create()->id;
            },
            'name' => fake()->name,
            'comments' => fake()->sentence,
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}
