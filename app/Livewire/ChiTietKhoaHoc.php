<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LinhVucTuyenSinh; // Thêm dòng này để sử dụng mô hình KhoaHoc

class ChiTietKhoaHoc extends Component
{
    public $khoaHoc; // Thêm biến để lưu trữ thông tin khóa học

    // Phương thức để lấy thông tin khóa học theo ID
    public function mount($slug) // Giả sử bạn truyền slug của khóa học vào
    {
        // Tìm khóa học theo slug
        $this->khoaHoc = LinhVucTuyenSinh::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.chi-tiet-khoa-hoc');
    }
}
