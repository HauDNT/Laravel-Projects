<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Được chạy khi ta make:migration
     */
    public function up(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            //
            $table -> enum('time', ['day', 'month', 'year']) -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     * Được chạy khi ra rollback
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            //
            $table -> dropColumn('time');
        });
    }
};
