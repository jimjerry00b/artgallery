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
        Schema::create('bottom_banners', function (Blueprint $table) {
            $table->id();
            $table->string('bottom_banner_title')->nullable();
            $table->string('bottom_banner_tagline')->nullable();
            $table->string('bottom_banner_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bottom_banners');
    }
};
