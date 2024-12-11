<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BangGiaKhoaHoc;
use App\Models\DangKyKhoaHoc;
use App\Models\LinhVucTuyenSinh; // Thêm dòng này
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TrangChu extends Component
{
    use LivewireAlert;

    public $bangGiaKhoaHocs;
    public $linhVucTuyenSinhs; // Thêm biến này
    public $showModal = false;
    public $khoaHocId;
    public $name, $email, $phone;

    // Mở Modal khi nhấn Đăng ký
    public function openModal($id)
    {
        $this->khoaHocId = $id;
        $this->showModal = true;
    }

    // Đóng Modal
    public function closeModal()
    {
        $this->showModal = false;
    }

    // Xử lý việc đăng ký khóa học
    public function submitRegistration()
    {
        if (empty($this->name) || empty($this->email) || empty($this->phone)) {
            $this->alert('error', 'Vui lòng điền đầy đủ thông tin!');
            return;
        }

        DangKyKhoaHoc::create([
            'khoa_hoc_id' => $this->khoaHocId,
            'ten' => $this->name,
            'email' => $this->email,
            'sdt' => $this->phone,
            'dia_chi' => '',
        ]);

        $this->alert('success', 'Đăng ký thành công!');
        $this->closeModal();
    }

    public function mount()
    {
        // Lấy danh sách các khóa học và lĩnh vực tuyển sinh
        $this->bangGiaKhoaHocs = BangGiaKhoaHoc::all();
        $this->linhVucTuyenSinhs = LinhVucTuyenSinh::all(); // Thêm dòng này
    }

    public function render()
    {
        return view('livewire.trang-chu');
    }
}
