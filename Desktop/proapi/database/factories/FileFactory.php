<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->file($sourceDir, $targetDir, false),
            'path' => $this->faker->file($sourceDir = '/tmp', $targetDir = '/tmp'),
            'size' => $this->faker->numberBetween($min = 5, $max = 20),
            'type' => $this->faker->fileExtension
        ];
    }
}
