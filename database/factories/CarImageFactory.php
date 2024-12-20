<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'iamge_path' => fake()->imageUrl(),
            'position' => function(array $attiributes) {
                return Car::find($attiributes['car_id'])->images()->count() + 1;
            }
        ];
    }
}
