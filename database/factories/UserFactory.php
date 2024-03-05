<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->unique()->phoneNumber,
            'phone_verified_at' => $this->faker->dateTime(),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => $this->faker->dateTime(),
            'password' => bcrypt('password'), // Use bcrypt to hash the placeholder password
            'unique_id' => Str::uuid(), // Generate a unique UUID
            'user_type' => $this->faker->randomElement(['developer', 'business_partner', 'kover', 'kover_member', 'user']),
            'is_active' => $this->faker->boolean,
            'access_level' => null, // Assuming nullable for dynamic assignment
            'partner_level' => null, // Assuming nullable for dynamic assignment
            'developer_api_key' => null, // Assuming nullable for dynamic assignment
            'community_points' => $this->faker->numberBetween(0, 1000),
            'subscription_id' => null, // Assuming nullable for dynamic assignment
            'subscription_ends_at' => $this->faker->dateTime(),
            'payment_method_id' => null, // Assuming nullable for dynamic assignment
            'renewal_reminder_sent_at' => $this->faker->dateTime(),
            'onboarding_completed' => $this->faker->boolean,
            'affiliate_id' => null, // Assuming nullable for dynamic assignment
            'verification_status' => $this->faker->randomElement(['pending', 'verifed', 'approved', 'declined']),
            'signup_ip_address' => $this->faker->ipv4,
            'last_active_at' => $this->faker->dateTime(),
            'two_factor_enabled' => $this->faker->boolean,
            'api_token' => Str::random(60), // Generate a random API token
            'external_id' => null, // Assuming nullable for dynamic assignment
            'custom_preferences' => json_encode(['theme' => 'dark']), // Example of custom preferences
            'privacy_settings' => json_encode(['share_email' => false]), // Example of privacy settings
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
                'phone_verified_at' => null,
            ];
        });
    }
}
