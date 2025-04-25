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
        Schema::create('TAIKHOAN', function (Blueprint $table) {
            $table->char('CCCD',12)->primary();
            $table->string('Ho');
            $table->string('Ten');
            $table->string('Email');
            $table->string('Sdt');
            $table->date('NgaySinh');

            //GioiTinh: True->Nam, False->Nữ
            $table->boolean('GioiTinh')->default(True)->comment = 'true:nam  false:nữ';
            $table->string('DiaChi');
            $table->string('MatKhau');
            $table->timestamp('ThoiGianDK')->nullable();

            // VaiTro: 0->admin, 1->BacSi, 2->ChuyenVien, 3->PhuHuynh
            $table->integer('VaiTro')->default(3)->comment = '0:admin 1:BacSi 2:ChuyenVienTC 3:NguoiGiamHo';

            // TrangThai: 0->đang chờ duyệt, 1->đang hoạt động, 2->bị khóa
            $table->integer('TrangThai')->default(0)->comment = '0:đang chờ duyệt  1:đang hoạt động  2:bị khóa';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TAIKHOAN');
    }
};
