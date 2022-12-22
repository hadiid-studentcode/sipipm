<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fasilitator>
 */
class FasilitatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nba' => $this->faker->postcode(),
            'wa' => $this->faker->e164PhoneNumber(),
            'jk' => $this->faker->randomElement(['laki - laki', 'perempuan']),
            'jabatan' => $this->faker->randomElement(['Master Of Training',
                'Imam Of Training',
                'Master Of Games',
                'Fasilitator Pemateri',
                'Fasilitator Pendamping',


            ]),
            'foto' => '1663923922899-hadiid.jpg',
            'fasili_pendamping' => 'hadiid'
        ];
    }
}
