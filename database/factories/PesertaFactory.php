<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
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
            'utusan' => $this->faker->randomElement(['PR IPM SMK Muhammadiyah 3 Pekanbaru', 'PR IPM MA Muhammadiyah Pekanbaru', 'PR IPM SMP Muhammadiyah 4 Pekanbaru', 'PR IPM SMP Muhammadiyah 4 Pekanbar', 'PR IPM MTS Muhammadiyah 2 Pekanbaru','PC IPM Tampan']),
            'nowa' => $this->faker->e164PhoneNumber(), 
            'jk' => $this->faker->randomElement(['laki - laki','perempuan']),
            'foto'=> '1664430083320-4.jpg'
        ];
    }
}
