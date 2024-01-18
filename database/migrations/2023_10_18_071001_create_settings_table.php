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
        	$table->string('name');
        	$table->mediumText('description');
        	$table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('email')->nullable();
            $table->text('website')->nullable();
            $table->string('logo')->nullable();
            $table->string('logo2')->nullable();
            $table->string('icon')->nullable();
            $table->text('social_media_links')->nullable();
        	$table->string('site_slogan')->nullable();
            $table->string('site_title')->nullable();
            $table->mediumText('site_des')->nullable();
            $table->string('site_image')->nullable();
            $table->string('theme_color')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
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
