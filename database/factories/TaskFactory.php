<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->text()
        ];
    }

    public function completed()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => true
            ];
        });
    }

    public function uncompleted()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => false
            ];
        });
    }

    public function tomorrow()
    {
        return $this->state(function (array $attributes) {
            return [
                'due_date' => now()->addDay()
            ];
        });
    }

    public function priority($level = 1)
    {
        return $this->state(
            fn (array $attributes) => [
                'priority' => $level
            ]
        );
    }
}
