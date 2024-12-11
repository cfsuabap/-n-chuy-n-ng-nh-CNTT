<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinhVucTuyenSinh extends Model
{
    use HasFactory;

    /**
     * Tên bảng trong cơ sở dữ liệu.
     */
    protected $table = 'linh_vuc_tuyen_sinh';

    /**
     * Các cột được phép gán giá trị hàng loạt (Mass Assignment).
     */
    protected $fillable = [
        'ten',
        'slug',
        'tieu_de',
        'mo_ta',
        'banner',
        'anh',
    ];
}
