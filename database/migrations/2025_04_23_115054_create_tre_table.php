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
        Schema::create('TRE', function (Blueprint $table) {
            $table->string('MaTre')->primary();
            $table->string('Ho');
            $table->string('Ten');
            $table->date('NgaySinh');
            $table->boolean('GioiTinh')->default(True)->comment = 'true:nam  false:nữ';
            $table->string('DanToc');
            $table->string('DiaChiThuongTru');
            $table->string('NoiSinh');
            $table->string('MinhChung');

            //ảnh đại diện
            $table->string('Anh'); 
            $table->string('HoTenCha'); 
            $table->string('HoTenMe'); 
            $table->integer('TrangThai'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TRE');
    }
};
