<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangGiaKhoaHoc extends Model
{
    use HasFactory;

    /**
     * Tên bảng trong cơ sở dữ liệu.
     */
    protected $table = 'bang_gia_khoa_hoc';

    /**
     * Các cột được phép gán giá trị hàng loạt (Mass Assignment).
     */
    protected $fillable = [
        'ten',
        'gia',
        'loai_xe',
        'xe_hoc',
        'mo_ta',
    ];
    public function dangKys()
{
    return $this->hasMany(DangKyKhoaHoc::class, 'khoa_hoc_id');
}

}
