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
        Schema::create('kover_companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kover_id')->nullable();
            $table->string('name');
            $table->string('domain_name')->nullable();
            $table->string('website')->nullable();
            $table->integer('tax_report')->default((0));
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('kover_companies');
    }
};
