<?php

namespace Database\Factories;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task' => fake()->name(),
            'datetime_start'=> Carbon::now(),
            'datetime_end'=> Carbon::now(),
            'note'=> fake()->paragraph(),
            'created_by'=> "April",
        ];
    }
}
