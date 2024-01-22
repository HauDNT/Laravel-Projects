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
        Schema::create('cambien', function (Blueprint $table) {
            $table->id();
            $table->string('ten_cam_bien', 500);
            $table->unsignedBigInteger('ma_don_vi');
            $table-> foreign('id') -> references('id') -> on('donvido') -> onDelete('cascade');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('cambien');
    }
};
