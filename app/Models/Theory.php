<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    use HasFactory;

    /**
     * Các thuộc tính có thể gán (fillable).
     */
    protected $fillable = [
        'name',  // Tên bài
        'slug',  // Slug
        'content',  // Nội dung
    ];
}
