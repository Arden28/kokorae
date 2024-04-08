<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\KoverCompany;
use App\Models\KoverJob;
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
            'phone' => +242064074926,
            'email' => 'laudbouetoummoussa@koverae.com',
            'street' => '56rue Mvouama Jean',
            'city' => 'Brazzaville',
            'zip' => 99324,
            'country' => 'Congo Brazzaville',
            'password' => Hash::make('koverae'), // Use bcrypt to hash the placeholder password
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
            'domain_name' => 'admin.'.env('APP_DOMAIN'),
            'website' => 'https://admin.'.env('APP_DOMAIN').'/web',
            'tax_report' => 0, // Or use specific logic to generate tax_report values.
            'logo' => 'logo', // Generates a random business-related image URL.
        ]);
        $company->save();

        // Devises
        $currencies = [
            // Afrique du Nord
            ['currency_name' => 'Dinar Algérien', 'code' => 'DZD', 'symbol' => 'د.ج'],
            ['currency_name' => 'Livre Égyptienne', 'code' => 'EGP', 'symbol' => '£'],
            ['currency_name' => 'Dinar Libyen', 'code' => 'LYD', 'symbol' => 'ل.د'],
            ['currency_name' => 'Dirham Marocain', 'code' => 'MAD', 'symbol' => 'د.م.'],
            ['currency_name' => 'Dinar Tunisien', 'code' => 'TND', 'symbol' => 'د.ت'],

            // Afrique de l'Ouest
            ['currency_name' => 'Franc CFA d’Afrique de l’Ouest', 'code' => 'XOF', 'symbol' => 'CFA'],
            ['currency_name' => 'Naira Nigérian', 'code' => 'NGN', 'symbol' => '₦'],
            ['currency_name' => 'Cedi Ghanéen', 'code' => 'GHS', 'symbol' => 'GH₵'],

            // Afrique Centrale
            ['currency_name' => 'Franc CFA d’Afrique Centrale', 'code' => 'XAF', 'symbol' => 'FCFA'],
            ['currency_name' => 'Franc Congolais', 'code' => 'CDF', 'symbol' => 'FC'],
            ['currency_name' => 'Franc Rwandais', 'code' => 'RWF', 'symbol' => 'RF'],

            // Afrique de l'Est
            ['currency_name' => 'Shilling Kenyan', 'code' => 'KES', 'symbol' => 'KSh'],
            ['currency_name' => 'Shilling Ougandais', 'code' => 'UGX', 'symbol' => 'USh'],
            ['currency_name' => 'Franc Rwandais', 'code' => 'RWF', 'symbol' => 'RF'],

            // Afrique Australe
            ['currency_name' => 'Pula Botswanais', 'code' => 'BWP', 'symbol' => 'P'],
            ['currency_name' => 'Rand Sud-Africain', 'code' => 'ZAR', 'symbol' => 'R'],
            ['currency_name' => 'Dollar Namibien', 'code' => 'NAD', 'symbol' => '$'],

            // Zone Euro - Utilisent l'Euro
            ['currency_name' => 'Euro', 'code' => 'EUR', 'symbol' => '€'],

            // Europe du Nord
            ['currency_name' => 'Couronne Danoise', 'code' => 'DKK', 'symbol' => 'kr.'],
            ['currency_name' => 'Couronne Norvégienne', 'code' => 'NOK', 'symbol' => 'kr'],
            ['currency_name' => 'Couronne Suédoise', 'code' => 'SEK', 'symbol' => 'kr'],
            ['currency_name' => 'Livre Sterling', 'code' => 'GBP', 'symbol' => '£'],

            // Europe de l'Est
            ['currency_name' => 'Zloty Polonais', 'code' => 'PLN', 'symbol' => 'zł'],
            ['currency_name' => 'Forint Hongrois', 'code' => 'HUF', 'symbol' => 'Ft'],
            ['currency_name' => 'Leu Roumain', 'code' => 'RON', 'symbol' => 'lei'],
            ['currency_name' => 'Lev Bulgare', 'code' => 'BGN', 'symbol' => 'лв.'],
            ['currency_name' => 'Rouble Russe', 'code' => 'RUB', 'symbol' => '₽'],

            // Europe du Sud
            ['currency_name' => 'Lira Turque', 'code' => 'TRY', 'symbol' => '₺'],
            ['currency_name' => 'Franc Suisse', 'code' => 'CHF', 'symbol' => 'CHF'],

            // Europe de l'Ouest (hors zone euro)
            ['currency_name' => 'Couronne Islandaise', 'code' => 'ISK', 'symbol' => 'kr'],
            ['currency_name' => 'Kuna Croate', 'code' => 'HRK', 'symbol' => 'kn'],

            // Extrême-Orient
            ['currency_name' => 'Yen Japonais', 'code' => 'JPY', 'symbol' => '¥'],
            ['currency_name' => 'Won Sud-Coréen', 'code' => 'KRW', 'symbol' => '₩'],
            ['currency_name' => 'Yuan Chinois', 'code' => 'CNY', 'symbol' => '¥'],
            ['currency_name' => 'Dollar de Hong Kong', 'code' => 'HKD', 'symbol' => '$'],
            ['currency_name' => 'Dollar Taïwanais', 'code' => 'TWD', 'symbol' => 'NT$'],

            // Asie du Sud-Est
            ['currency_name' => 'Baht Thaïlandais', 'code' => 'THB', 'symbol' => '฿'],
            ['currency_name' => 'Dollar Singapourien', 'code' => 'SGD', 'symbol' => '$'],
            ['currency_name' => 'Ringgit Malaisien', 'code' => 'MYR', 'symbol' => 'RM'],
            ['currency_name' => 'Roupie Indonésienne', 'code' => 'IDR', 'symbol' => 'Rp'],
            ['currency_name' => 'Peso Philippin', 'code' => 'PHP', 'symbol' => '₱'],

            // Asie du Sud
            ['currency_name' => 'Roupie Indienne', 'code' => 'INR', 'symbol' => '₹'],
            ['currency_name' => 'Roupie Pakistanaise', 'code' => 'PKR', 'symbol' => '₨'],
            ['currency_name' => 'Taka Bangladais', 'code' => 'BDT', 'symbol' => '৳'],
            ['currency_name' => 'Roupie Sri Lankaise', 'code' => 'LKR', 'symbol' => 'Rs'],
            ['currency_name' => 'Afghani Afghan', 'code' => 'AFN', 'symbol' => '؋'],

            // Amérique du Nord
            ['currency_name' => 'Dollar Américain', 'code' => 'USD', 'symbol' => '$'],
            ['currency_name' => 'Dollar Canadien', 'code' => 'CAD', 'symbol' => '$'],
            ['currency_name' => 'Peso Mexicain', 'code' => 'MXN', 'symbol' => '$'],

            // Amérique Centrale
            ['currency_name' => 'Quetzal Guatémaltèque', 'code' => 'GTQ', 'symbol' => 'Q'],
            ['currency_name' => 'Lempira Hondurien', 'code' => 'HNL', 'symbol' => 'L'],
            ['currency_name' => 'Córdoba Nicaraguayen', 'code' => 'NIO', 'symbol' => 'C$'],
            ['currency_name' => 'Balboa Panaméen', 'code' => 'PAB', 'symbol' => 'B/.'],
            ['currency_name' => 'Dollar de Belize', 'code' => 'BZD', 'symbol' => 'BZ$'],

            // Amérique du Sud
            ['currency_name' => 'Real Brésilien', 'code' => 'BRL', 'symbol' => 'R$'],
            ['currency_name' => 'Peso Argentin', 'code' => 'ARS', 'symbol' => '$'],
            ['currency_name' => 'Peso Colombien', 'code' => 'COP', 'symbol' => '$'],
            ['currency_name' => 'Sol Péruvien', 'code' => 'PEN', 'symbol' => 'S/.'],
            ['currency_name' => 'Bolívar Vénézuélien', 'code' => 'VES', 'symbol' => 'Bs.'],
            ['currency_name' => 'Peso Uruguayen', 'code' => 'UYU', 'symbol' => '$'],
            ['currency_name' => 'Peso Chilien', 'code' => 'CLP', 'symbol' => '$'],

            // Caraïbes
            ['currency_name' => 'Dollar des Caraïbes Orientales', 'code' => 'XCD', 'symbol' => '$'],
            ['currency_name' => 'Gourde Haïtienne', 'code' => 'HTG', 'symbol' => 'G'],
            ['currency_name' => 'Dollar Jamaïcain', 'code' => 'JMD', 'symbol' => 'J$']

        ];
        foreach($currencies as $currency){
            Currency::create($currency);
        }

        $jobs = [
            [
                'name' => 'Stagiaire développeur Laravel / Livewire',
                'location' => 'Brazzaville, Congo',
                'department' => 'Recherche & Développement',
                'available_jobs' => 2,
                'description' => '<p>Develop high-quality software, design, and functional documentation.</p>',
                'is_active' => true,
            ],
            [
                'name' => 'Stagiaire Community Manager',
                'location' => 'Brazzaville, Congo',
                'department' => 'Marketing',
                'available_jobs' => 1,
                'description' => '<p>Develop high-quality software, design, and functional documentation.</p>',
                'is_active' => true,
            ],
            [
                'name' => 'Stagiaire Commercial',
                'location' => 'Brazzaville, Congo',
                'department' => 'Ventes',
                'available_jobs' => 3,
                'description' => '<p>Develop high-quality software, design, and functional documentation.</p>',
                'is_active' => true,
            ],
        ];
        foreach($jobs as $job){
            KoverJob::create($job);
        }
    }
}
