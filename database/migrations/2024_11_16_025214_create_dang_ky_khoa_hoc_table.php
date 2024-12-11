<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangKyKhoaHocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dang_ky_khoa_hoc', function (Blueprint $table) {
            $table->id(); // Tạo trường id tự động tăng
            $table->unsignedBigInteger('khoa_hoc_id'); // id khóa học
            $table->string('ten'); // Tên người đăng ký
            $table->string('email'); // Email người đăng ký
            $table->string('sdt'); // Số điện thoại người đăng ký
            $table->string('dia_chi'); // Địa chỉ người đăng ký
            $table->timestamps(); // Các trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dang_ky_khoa_hoc');
    }
}
