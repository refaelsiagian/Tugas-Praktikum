<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
    */
    protected $model = \App\Models\Staff::class;
    public function definition(): array
    {
        return [
            'nip' => fake()->numerify('##########'),
            'email' => fake()->unique()->safeEmail(),
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->date(),
            'no_telp' => fake()->phoneNumber(),
        ];
    }
}
