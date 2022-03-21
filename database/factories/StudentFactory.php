<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "birth_place" => $this->faker->name(),
            "dob" => $this->faker->date(),
            "nationality" => $this->faker->name(),
            "address" => $this->faker->text(),
            "email" => $this->faker->unique()->safeEmail(),
            "phone_number" => $this->faker->phoneNumber(),
            "smp_name" => $this->faker->name(),
            "father_name" => $this->faker->name(),
            "mother_name" => $this->faker->name(),
            "parent_income" => $this->faker->numberBetween(1000000, 100000000),
            "image" => "images/user.png",
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
