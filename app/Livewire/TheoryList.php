<?php

namespace App\Livewire;

use App\Models\Theory;
use Livewire\Component;

class TheoryList extends Component
{
    public $theories;  // Danh sách các bài học
    public $selectedTheory;  // Bài học được chọn

    public function mount($slug = null)
    {
        // Lấy tất cả các bài học từ bảng Theory
        $this->theories = Theory::all();

        // Nếu có slug, lấy chi tiết bài học
        if ($slug) {
            $this->selectedTheory = Theory::where('slug', $slug)->first();
        }
    }

    public function render()
    {
        return view('livewire.theory-list');
    }
}
