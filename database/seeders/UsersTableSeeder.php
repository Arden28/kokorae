<?php

namespace Database\Seeders;

use App\Models\KoverCompany;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'BOUETOUMOUSSA Arden',
            'society' => 'Koverae SARL',
            'phone' => 242064074926,
            'email' => 'laudbouetoummoussa@koverae.com',
            'street' => '56rue Mvouama Jean',
            'city' => 'Brazzaville',
            'zip' => 99324,
            'country' => 'Congo Brazzaville',
            'password' => Hash::make('password'), // Use bcrypt to hash the placeholder password
            'unique_id' => Str::uuid(), // Generate a unique UUID
            'user_type' => 'kover',
            'is_active' => true,
            'verification_status' => 'pending',
            // 'signup_ip_address' => $this->faker->ipv4,
            'last_active_at' => now(),
            'two_factor_enabled' => false,
            'api_token' => Str::random(60), // Generate a random API token
            'external_id' => null, // Assuming nullable for dynamic assignment
            'custom_preferences' => json_encode(['theme' => 'dark']), // Example of custom preferences
            'privacy_settings' => json_encode(['share_email' => false]), // Example of privacy settings
            'remember_token' => Str::random(10),
        ]);
        $user->save();

        $company = KoverCompany::create([
            'kover_id' => $user->id, // Assuming 'kover_id' relates to an existing ID or null.
            'name' => 'Koverae SARL',
            'domain_name' => 'admin.koverae.localhost',
            'website' => 'https://admin.koverae.localhost/web',
            'tax_report' => 0, // Or use specific logic to generate tax_report values.
            'logo' => 'logo', // Generates a random business-related image URL.
        ]);
        $company->save();

    }
}
