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
        Schema::create('demo_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('prospect_name');
            $table->string('prospect_company_name');
            $table->string('prospect_role')->nullable();
            $table->string('prospect_phone');
            $table->string('prospect_email');
            $table->string('prospect_country');
            $table->string('prospect_city');
            $table->string('prospect_company_size');
            $table->string('prospect_company_industry');
            $table->enum('prospect_status', ['new', 'called', 'seen', 'implemented'])->default('new');
            $table->string('date');
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
        Schema::dropIfExists('demo_bookings');
    }
};
