<?php

namespace Database\Factories;

use App\Models\Kurs;
use App\Models\Polaznik;
use Illuminate\Database\Eloquent\Factories\Factory;

class KupovinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'polaznik_id' => random_int(1,Polaznik::count()),
            'kurs_id'=> random_int(1,Kurs::count()),
            'datum'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
