<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\DetailDosen;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailDosen>
 */
class DetailDosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_dosen' => $this->faker->numberBetween(1, 10),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date
        ];
    }
}
