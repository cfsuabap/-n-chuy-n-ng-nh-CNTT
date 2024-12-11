<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_gia_khoa_hoc', function (Blueprint $table) {
            $table->id(); // Khóa chính
            $table->string('ten'); // Tên khóa học
            $table->decimal('gia', 30, 2); // Giá khóa học
            $table->string('loai_xe'); // Loại xe (vd: xe máy, ô tô)
            $table->string('xe_hoc'); // Xe học (vd: xe số, xe tay ga)
            $table->text('mo_ta')->nullable(); // Mô tả khóa học
            $table->timestamps(); // Cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bang_gia_khoa_hoc');
    }
};
