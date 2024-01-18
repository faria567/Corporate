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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('slider_title');
            $table->mediumText('slider_short_title');
        	$table->mediumText('slider_short_description');
            $table->mediumText('slider_button_text');
            $table->string('service_title');
            $table->string('service_short_title');
            $table->mediumText('service_description');
            $table->string('service_button_text');
            $table->string('portfolio_title');
            $table->string('portfolio_short_title');
            $table->mediumText('portfolio_short_description');
            $table->string('team_title');
            $table->string('team_short_title');
            $table->string('blog_title');
            $table->string('blog_short_title');
            $table->integer('project_complete');
            $table->integer('active_client');
            $table->integer('happy_client');
            $table->integer('cup_of_coffee');
            $table->string('client_name');
            $table->string('client_designation');
            $table->string('client_review');
            $table->string('display_title');
            $table->string('display_button_text');
            $table->string('client_image')->nullable();
            $table->string('sponsor_image')->nullable();
            $table->string('service_image')->nullable();
            $table->string('slider_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
