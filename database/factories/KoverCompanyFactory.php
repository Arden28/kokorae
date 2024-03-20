<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KoverCompany>
 */
class KoverCompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kover_id' => $this->faker->optional()->numberBetween(1, 10), // Assuming 'kover_id' relates to an existing ID or null.
            'name' => $this->faker->company,
            // 'domain_name' => $this->faker->optional()->domainName,
            'domain_name' => str()->slug($this->faker->company),
            'tax_report' => $this->faker->randomElement([0, 1]), // Or use specific logic to generate tax_report values.
            'logo' => $this->faker->optional()->imageUrl(640, 480, 'business'), // Generates a random business-related image URL.
        ];
    }
}
