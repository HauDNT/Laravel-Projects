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
        Schema::create('giatri', function (Blueprint $table) {
            $table->id();
            $table->string('gia_tri', 1000);
            $table->dateTime('thoi_gian')->nullable();
            $table->foreign('id')->references('id')->on('cambien')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giatri');
    }
};
