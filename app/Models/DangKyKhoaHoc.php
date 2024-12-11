<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DangKyKhoaHoc extends Model
{
    use HasFactory;

    /**
     * Tên bảng trong cơ sở dữ liệu.
     */
    protected $table = 'dang_ky_khoa_hoc';

    /**
     * Các cột được phép gán giá trị hàng loạt (Mass Assignment).
     */
    protected $fillable = [
        'khoa_hoc_id',
        'ten',
        'email',
        'sdt',
        'dia_chi',
    ];

    /**
     * Quan hệ với bảng khóa học.
     */
    public function khoaHoc()
    {
        return $this->belongsTo(KhoaHoc::class, 'khoa_hoc_id'); // Mối quan hệ N:1
    }
}
