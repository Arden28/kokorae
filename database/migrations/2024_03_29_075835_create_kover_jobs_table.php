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
        Schema::create('kover_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('department');
            $table->integer('available_jobs')->default(0);
            $table->longText('description');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('kover_jobs');
    }
};
