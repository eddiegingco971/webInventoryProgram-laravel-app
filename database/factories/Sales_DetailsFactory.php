<?php

namespace Database\Factories;

use App\Models\Sales_Details;
use Illuminate\Database\Eloquent\Factories\Factory;

class Sales_DetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sales_Details::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->word,
        'product_id' => $this->faker->word,
        'wholesale_stock' => $this->faker->randomDigitNotNull,
        'Total_amount' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
