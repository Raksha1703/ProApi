<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            //'gender' => $this->faker->
            'phonenumber' => $this->faker->e164PhoneNumber,
            'semester' => $this->faker->numberBetween($min = 1, $max = 6),
            'clgname' => $this->faker->company,
            //'Qualification' => $this->faker->
            //'Technology' => $this->faker->
            'cover' => $this->faker->image($width = 640, $height = 480),
            'avtar' => $this->faker->emoji,
            //'status' => $this->faker->
            'email' => $this->faker->safeEmail
        ];
    }
}
