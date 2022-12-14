<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notif>
 */
class NotifFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'isi_notif' => $this->faker->word(),
            'id_user' => 1,
            'status' => "0",
            'url' => '/fasilitator'
        ];
    }
}
