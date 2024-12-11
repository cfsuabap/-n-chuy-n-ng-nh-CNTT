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
        Schema::create('linh_vuc_tuyen_sinh', function (Blueprint $table) {
            $table->id(); // Khóa chính
            $table->string('ten'); // Tên lĩnh vực
            $table->string('slug')->unique(); // Slug
            $table->string('tieu_de')->nullable(); // Tiêu đề
            $table->text('mo_ta')->nullable(); // Mô tả
            $table->string('banner')->nullable(); // URL của banner
            $table->string('anh')->nullable(); // URL của ảnh
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
        Schema::dropIfExists('linh_vuc_tuyen_sinh');
    }
};
