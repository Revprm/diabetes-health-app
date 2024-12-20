<?php

namespace Database\Factories;

use App\Models\PredictionHistory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PredictionHistoryFactory extends Factory
{
    protected $model = PredictionHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'HighBP' => $this->faker->randomElement([0, 1]),
            'HighChol' => $this->faker->randomElement([0, 1]),
            'BMI' => $this->faker->randomFloat(1, 15, 40),
            'Stroke' => $this->faker->randomElement([0, 1]),
            'HeartDiseaseorAttack' => $this->faker->randomElement([0, 1]),
            'PhysActivity' => $this->faker->randomElement([0, 1]),
            'GenHlth' => $this->faker->numberBetween(1, 5), // 1: Excellent, 5: Poor
            'PhysHlth' => $this->faker->numberBetween(0, 30),
            'DiffWalk' => $this->faker->randomElement([0, 1]),
            'Age' => $this->faker->numberBetween(18, 80),
            'Education' => $this->faker->numberBetween(1, 6),
            'Income' => $this->faker->numberBetween(1, 8),
            'prediction' => $this->faker->randomElement([0, 1, 2]),
            'confidence' => $this->faker->randomFloat(2, 0.5, 1), // Confidence as a percentage
            'user_id' => User::factory(), // Assumes User factory exists
        ];
    }
}
