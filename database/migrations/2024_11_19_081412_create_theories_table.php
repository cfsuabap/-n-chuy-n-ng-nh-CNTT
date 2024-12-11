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
        Schema::create('theories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên bài
            $table->string('slug')->unique(); // Slug
            $table->longText('content')->nullable(); // Nội dung
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theories');
    }
};
