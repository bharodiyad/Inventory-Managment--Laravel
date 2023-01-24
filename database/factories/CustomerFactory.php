<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'customer_image' => null,
            'mobile_no'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'address'=>fake()->address(),
            'status' => '1',
            'created_by' => 1,
            'updated_by' => null,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => null,
        ];
    }
}
