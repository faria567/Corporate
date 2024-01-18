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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->string('content_title1');
            $table->string('content_image1');
            $table->mediumText('content_des1');
            $table->string('content_title2');
            $table->string('content_image2');
            $table->mediumText('content_des2');
            $table->string('content_title3');
            $table->string('content_image3');
            $table->mediumText('content_des3');
            $table->mediumText('conclusion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
