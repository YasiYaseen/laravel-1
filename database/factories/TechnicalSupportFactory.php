<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TechnicalSupportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uid' => substr(str_shuffle('150KLMNOPABCDEFG3HIJQRSTUVWXYZ'), 0, 4).rand(100,999),
            'name' => $this->faker->name,
            'product_type' => $this->faker->word,
            'product_model' => $this->faker->word,
            'serial_no' => $this->faker->unique()->word,
            'location' => 12,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'subject' => $this->faker->sentence,
            'message' => $this->faker->paragraph,
            'combination_key' =>'TECHNICAL_ENQUIRY',          
            'imageurl' => $this->faker->imageUrl,
            'videourl' => $this->faker->url,
        ];
    }
}
