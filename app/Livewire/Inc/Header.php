<?php
namespace App\Livewire\Inc;

use App\Models\Exam;
use App\Models\Theory;
use App\Models\LinhVucTuyenSinh; // Add the LinhVucTuyenSinh model
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        // Get all the theories and exams
        $theories = Theory::all();
        $exams = Exam::all();

        // Get all the courses (LinhVucTuyenSinh)
        $courses = LinhVucTuyenSinh::all();  // Lấy tất cả các khóa học

        return view('livewire.inc.header', compact('exams', 'theories', 'courses'));
    }
}
