<?php

namespace Database\Factories;

 use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductModel>
 */
class ProductModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>  fake()->word(),
            'price'=> fake()->numberBetween(100,5000),
            'description'=> fake()->paragraph(),
            'created_at'=> fake()->dateTime(),
            'updated_at'=> fake()->dateTime(),
        ];
        
    }
   
}
