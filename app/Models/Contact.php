<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * Các thuộc tính có thể gán (fillable).
     */
    protected $fillable = [
        'full_name', // Họ và tên
        'email',     // Email
        'subject',   // Tiêu đề
        'message',   // Nội dung
    ];
}
