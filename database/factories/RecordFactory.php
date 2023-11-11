<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' => $this->faker->name(20),
            'price_total' => $this->faker->randomFloat(0, 100, 10000),
            'price_shop' => $this->faker->randomFloat(0, 100, 10000),
            'price_artist' => $this->faker->randomFloat(0, 100, 10000),
            'service_id' => $this->faker->randomElement([1,2,3]),
            'details' => $this->faker->randomElement(['Sun ', 'Mandala', 'Moon', 'Ear', 'Wrist']), // Replace with more appropriate fake data if available
            'placement' => $this->faker->randomElement(['Arm', 'Leg', 'Back', 'Navel', 'Earlobe']), // Replace with more appropriate body parts if needed
            'artist_id' => $this->faker->randomElement([1,2,3,4,5]),
            'appointment_id' => $this->faker->randomElement([1,2,3]),
            'receipt_number' => $this->faker->unique()->randomNumber(4),
            'image_attachment' => $this->faker->imageUrl(), // Replace with more appropriate fake image URLs or file paths
            'waiver_attachment' => $this->faker->randomElement(['Tattoo.jpg', 'Piercing.pdf']),
            'notes' => $this->faker->sentence
        ];
    }
}
