<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->mediumText('description');
            $table->string('salary_range');
            $table->date('application_deadline');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};


