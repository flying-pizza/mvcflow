<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
use App\Models\Category;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition(): array 
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(10000, 100000),
            'stock' => $this->faker->numberBetween(1, 100),
            'category_id' => Category::factory(),
        ];
    }
}