<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('NGUOIGIAMHO_TRE', function (Blueprint $table) {
            $table->char('CCCD_NGH',12);
            $table->string('MaTre');
            $table->string('QuanHe');
            $table->integer('TrangThai')->default(0)->comment('0:chờ duyệt 1:đã duyệt, 2:đã từ chối');


            $table->primary(['CCCD_NGH', 'MaTre']);


            $table->foreign('CCCD_NGH')
                ->references('CCCD')
                ->on('taikhoan')
                ->onDelete('cascade');

            $table->foreign('MaTre')
                ->references('MaTre')
                ->on('tre')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NGUOIGIAMHO_TRE');
    }
};
