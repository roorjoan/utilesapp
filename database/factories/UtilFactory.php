<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Util>
 */
class UtilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Laravel docs',
            'description' => 'Laravel docs for Laravel developers',
            'url' => 'http://laravel.com',
            'file' => 'storage/uploads/file.png',
        ];
    }
}
