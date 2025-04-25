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
        Schema::create('VACXIN', function (Blueprint $table) {
            $table->id('MaVacXin');
            $table->string('TenVacXin');
            $table->string('HangSX');
            $table->string('XuatXu');
            $table->integer('SoLieuCanTiem');
            $table->integer('SoLieuHienCon');
            $table->text('MoTa');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('VACXIN');
    }
};
