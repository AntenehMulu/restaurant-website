<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_location');
            $table->string('company_email');
            $table->string('company_facebook');
            $table->string('company_linkedin');
            $table->string('company_instagram');
            $table->string('company_skype');
            $table->string('company_twitter');
            $table->string('company_logo');
            $table->string('company_about_image');
            $table->string('company_event_image');
            $table->string('company_google_map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
