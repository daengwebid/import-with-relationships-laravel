<?php

namespace Database\Factories;

use App\Models\ObjekPajak;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjekPajakFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ObjekPajak::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nopd' => $this->faker->creditCardNumber,
            'nama_usaha' => $this->faker->name,
            'alamat' => $this->faker->address,
            'rt_rw' => $this->faker->randomDigit . '' . $this->faker->randomDigit . '/' . $this->faker->randomDigit . '' . $this->faker->randomDigit,
            'status' => $this->faker->jobTitle
        ];
    }
}
