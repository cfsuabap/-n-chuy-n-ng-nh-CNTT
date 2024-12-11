<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exam;
use App\Models\ExamPaper;

class ExamDetail extends Component
{
    public $exam;
    public $exams; // Danh sách các đề thi

    public function mount($id)
    {
        // Truy vấn bài thi theo id
        $this->exam = Exam::findOrFail($id);

        // Lấy tất cả các đề thi
        $this->exams = ExamPaper::all();
    }

    public function render()
    {
        $mainExams = ExamPaper::main()->get(); // Lấy các đề thi chính

        $subExams = ExamPaper::sub()->get(); // Lấy các đề thi phụ
        return view('livewire.exam-detail', compact( 'mainExams', 'subExams'));
    }
}
