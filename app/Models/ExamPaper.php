<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPaper extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'code',
        'name',
        'video_link',  // Thêm video_link vào đây
        'type',
    ];    public function scopeMain($query)
    {
        return $query->where('type', 'main');
    }

    // Lọc các đề thi phụ (sub)
    public function scopeSub($query)
    {
        return $query->where('type', 'sub');
    }
}
