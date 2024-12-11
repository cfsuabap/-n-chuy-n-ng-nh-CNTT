<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DangNhap extends Component
{
    use LivewireAlert;

    public $email;
    public $password;

  public function mount()
  {
    if(Auth::check()) {
        return redirect('/');
    }
  }

    public function login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Đăng nhập thành công
            $this->alert('success', 'Đăng nhập thành công!');
            return redirect('/'); // Điều hướng tới trang chính
        }

        // Đăng nhập thất bại
        $this->alert('error', 'Email hoặc mật khẩu không chính xác.');
    }

    public function render()
    {
        return view('livewire.dang-nhap');
    }
}
