<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_kover_id')->nullable();
            $table->string('name');
            $table->string('society')->nullable();
            $table->string('phone')->unique();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('password')->nullable();
            $table->string('unique_id')->unique()->nullable(); //
            $table->enum('user_type',['developer', 'business_partner', 'kover', 'kover_member', 'user'])->default('kover');
            $table->boolean('is_active')->default(true);
            $table->string('access_level')->nullable(); //Differentiates between various access permissions or roles.
            $table->string('partner_level')->nullable(); //Indicates the tier or level of partnership for business partners.
            $table->string('developer_api_key')->nullable(); //Stores an API key for users identified as developers.
            $table->string('community_points')->nullable(); //Tracks points or reputation within the developer community.
            // Subscription
            $table->unsignedBigInteger('subscription_id')->nullable(); // Specifies the subscription plan.
            $table->timestamp('subscription_ends_at')->nullable(); //When the user's subscription ends (if applicable).
            $table->string('payment_method_id')->nullable(); //Links to a preferred payment method.
            $table->timestamp('renewal_reminder_sent_at')->nullable();

            $table->boolean('onboarding_completed')->nullable()->default(false);
            $table->string('affiliate_id')->nullable(); //Tracks affiliations within an affiliate program.
            $table->enum('verification_status', ['pending', 'verifed', 'approved', 'declined'])->default('pending')->nullable(); //Manages the verification status of users.
            $table->string('signup_ip_address')->nullable(); //
            $table->timestamp('last_active_at')->nullable();
            $table->boolean('two_factor_enabled')->default(false);
            $table->string('api_token')->nullable(); //
            $table->string('external_id')->nullable(); // For linking with external systems
            $table->json('custom_preferences')->nullable(); // JSON column for flexible data
            $table->json('privacy_settings')->nullable(); // JSON column for user's privacy preferences
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
