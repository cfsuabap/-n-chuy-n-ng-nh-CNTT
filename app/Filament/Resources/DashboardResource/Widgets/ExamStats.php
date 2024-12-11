<?php
namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\DangKyKhaoHoc; // Sử dụng model đăng ký khóa học
use Carbon\Carbon;
use Filament\Widgets\LineChartWidget;
use Filament\Widgets\LineChartWidget\Dataset;

class ExamStats extends LineChartWidget
{
    protected static ?string $heading = 'Thống kê bài thi và đăng ký';

    protected function getData(): array
    {
        // Biểu đồ Doanh thu từ các bài thi (theo ngày)
        $salesData = $this->getExamSalesData();

        // Biểu đồ Số lượng câu trả lời đúng (theo ngày)
        $answerData = $this->getAnswerStats();

        // Biểu đồ Số lượng đăng ký khóa học (theo ngày)
        $registrationData = $this->getRegistrationStats();

        return [
            // Dữ liệu cho biểu đồ doanh thu theo ngày
            [
                'label' => 'Doanh thu từ bài thi',
                'datasets' => [
                    [
                        'label' => 'Doanh thu theo ngày',
                        'data' => $salesData->values(),
                    ]
                ],
                'labels' => $salesData->keys(),
            ],
            // Dữ liệu cho biểu đồ câu trả lời đúng theo ngày
            [
                'label' => 'Số câu trả lời đúng',
                'datasets' => [
                    [
                        'label' => 'Câu trả lời đúng theo ngày',
                        'data' => $answerData->values(),
                    ]
                ],
                'labels' => $answerData->keys(),
            ],
            // Dữ liệu cho biểu đồ số lượng đăng ký khóa học
            [
                'label' => 'Số lượng đăng ký khóa học',
                'datasets' => [
                    [
                        'label' => 'Đăng ký khóa học theo ngày',
                        'data' => $registrationData->values(),
                    ]
                ],
                'labels' => $registrationData->keys(),
            ]
        ];
    }

    // Lấy dữ liệu doanh thu từ các bài thi theo ngày (dữ liệu ảo)
    private function getExamSalesData()
    {
        // Dữ liệu ảo cho doanh thu từ bài thi
        return collect([
            '01-10-2024' => 100000,
            '02-10-2024' => 120000,
            '03-10-2024' => 110000,
            '04-10-2024' => 130000,
            '05-10-2024' => 140000,
        ]);
    }

    // Lấy dữ liệu số câu trả lời đúng theo ngày (dữ liệu ảo)
    private function getAnswerStats()
    {
        // Dữ liệu ảo cho số câu trả lời đúng
        return collect([
            '01-10-2024' => 45,
            '02-10-2024' => 50,
            '03-10-2024' => 48,
            '04-10-2024' => 60,
            '05-10-2024' => 65,
        ]);
    }

    // Lấy dữ liệu số lượng đăng ký khóa học (dữ liệu ảo)
    private function getRegistrationStats()
    {
        // Dữ liệu ảo cho số lượng đăng ký khóa học
        return collect([
            '01-10-2024' => 30,
            '02-10-2024' => 35,
            '03-10-2024' => 32,
            '04-10-2024' => 40,
            '05-10-2024' => 50,
        ]);
    }

    // Các bộ lọc để chọn khoảng thời gian
    protected function getFilters(): ?array
    {
        return [
            'today' => 'Hôm nay',
            'week' => 'Tuần này',
            'month' => 'Tháng này',
            'year' => 'Năm này',
        ];
    }
}
