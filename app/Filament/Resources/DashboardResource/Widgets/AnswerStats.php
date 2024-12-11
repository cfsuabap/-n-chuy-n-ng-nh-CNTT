<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\Answer;
use App\Models\Question;
use App\Models\ExamPaper;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AnswerStats extends BaseWidget
{
    protected function getCards(): array
    {
        // Lấy tổng số câu hỏi
        $totalQuestions = Question::count();

        // Lấy tổng số đề thi
        $totalExamPapers = ExamPaper::count();
        $totalExamAnswer = Answer::count();

        return [
            Card::make('Tổng Số Câu Hỏi', $totalQuestions)
                ->description('Tổng số câu hỏi trong hệ thống')
                ->descriptionIcon('heroicon-s-question-mark-circle')
                ->color('primary'),
            Card::make('Tổng Số Đề Thi', $totalExamPapers)
                ->description('Tổng số đề thi trong hệ thống')
                ->descriptionIcon('heroicon-s-document')
                ->color('success'),
            Card::make('Tổng Số Đáp Án', $totalExamAnswer)
                ->description('Tổng số đáp án trong hệ thống')
                ->descriptionIcon('heroicon-s-document')
                ->color('success'),
        ];
    }
}
