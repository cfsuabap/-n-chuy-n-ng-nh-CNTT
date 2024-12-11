<?php

namespace App\Livewire;

use App\Models\Exam;
use App\Models\ExamPaper;
use App\Models\Question;
use App\Models\Answer;
use App\Models\ExamResult;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ExamPractice extends Component
{
    public $exam;
    public $examPapers;
    public $questions;
    public $selectedAnswers = [];
    public $isSubmitted = false;
    public $correctAnswersCount = 0;
    public $answeredQuestions = [];

    // Lấy thông tin bài thi, các đề thi và câu hỏi liên quan
    public function mount($id)
    {
        $this->examPapers = ExamPaper::where('id', $id)->get();

        if ($this->examPapers->isNotEmpty()) {
            $this->exam = Exam::find($this->examPapers->first()->exam_id);
        }

        $this->questions = Question::with('answers')
            ->whereIn('exam_paper_id', $this->examPapers->pluck('id'))
            ->get();
    }

    // Hàm xử lý khi người dùng nộp bài thi
    public function submitExam()
    {
        $correctAnswers = 0;

        foreach ($this->selectedAnswers as $questionId => $answerId) {
            $question = Question::find($questionId);
            $correctAnswer = $question->answers()->where('is_correct', true)->first();

            $this->answeredQuestions[$questionId] = [
                'selected_answer' => $answerId,
                'correct_answer' => $correctAnswer ? $correctAnswer->id : null,
                'is_correct' => $correctAnswer && $correctAnswer->id == $answerId,
            ];

            if ($this->answeredQuestions[$questionId]['is_correct']) {
                $correctAnswers++;
            }
        }

        // Tính điểm
        $score = $correctAnswers;

        // Lưu kết quả vào bảng ExamResult
        ExamResult::create([
            'user_id' => Auth::id(),
            'exam_paper_id' => $this->examPapers->first()->id,
            'completion_time' => 120,
            'correct_answers' => $correctAnswers,
            'score' => $score,
        ]);

        // Đánh dấu bài thi đã được nộp
        $this->isSubmitted = true;
        $this->correctAnswersCount = $correctAnswers;
    }

    public function render()
    {
        return view('livewire.exam-practice');
    }
}
