<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DangKy extends Component
{
    use LivewireAlert;

    public $fullname;
    public $email;
    public $password;
    public $password_confirmation;

    public function register()
    {
        // Kiểm tra các trường nhập liệu
        if (empty($this->fullname)) {
            $this->alert('error', 'Họ và tên là bắt buộc!');
            return;
        }

        if (empty($this->email)) {
            $this->alert('error', 'Email là bắt buộc!');
            return;
        }

        if (empty($this->password)) {
            $this->alert('error', 'Mật khẩu là bắt buộc!');
            return;
        }

        if ($this->password !== $this->password_confirmation) {
            $this->alert('error', 'Mật khẩu và mật khẩu xác nhận không khớp!');
            return;
        }

        // Kiểm tra email đã tồn tại trong hệ thống
        if (User::where('email', $this->email)->exists()) {
            $this->alert('error', 'Email đã được đăng ký!');
            return;
        }

        try {
            // Tạo tài khoản người dùng mới
            $user = User::create([
                'name' => $this->fullname,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            // Đăng nhập người dùng ngay sau khi đăng ký
            auth()->login($user);

            // Hiển thị thông báo thành công
            $this->alert('success', 'Đăng ký thành công!');
            
            // Chuyển hướng sau khi đăng ký thành công
            return redirect('/');
        } catch (\Exception $e) {
            // Hiển thị thông báo lỗi nếu có vấn đề trong quá trình đăng ký
            $this->alert('error', 'Đăng ký thất bại, vui lòng thử lại!');
        }
    }

    public function render()
    {
        return view('livewire.dang-ky');
    }
}
