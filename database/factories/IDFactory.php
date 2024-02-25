<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Id;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Id>
 */
class IDFactory extends Factory
{

    protected $model = Id::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected static $lastId = null;

    public function definition(): array
    {
        $nextId = static::$lastId !== null ? static::$lastId + 1 : DB::table('id')->max('id') + 1;
        static::$lastId = $nextId;

        return [
            'id' => $nextId,
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}
