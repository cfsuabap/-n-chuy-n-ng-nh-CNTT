<?php
namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\BangGiaKhoaHoc;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class PricingStats extends BaseWidget
{
    protected function getCards(): array
    {
        // Tổng số kế hoạch giá
        $totalPricingPlans = BangGiaKhoaHoc::count();

        // Tổng doanh thu từ các kế hoạch giá
        $totalRevenue = BangGiaKhoaHoc::sum('gia'); // Giả sử 'gia' là cột giá

        // Lấy giá trị kế hoạch giá cao nhất
        $maxPricingPlan = BangGiaKhoaHoc::max('gia'); // Giả sử 'gia' là cột giá

        return [
            // Card cho tổng số kế hoạch giá
            Card::make('Tổng Số Kế Hoạch Giá', $totalPricingPlans)
                ->description('Tổng số kế hoạch giá')
                ->descriptionIcon('heroicon-s-cog')
                ->color('primary'),

            // Card cho tổng doanh thu
            Card::make('Tổng Doanh Thu', number_format($totalRevenue) . ' VND')
                ->description('Tổng doanh thu từ các kế hoạch giá')
                ->descriptionIcon('heroicon-s-currency-dollar')
                ->color('success'),

            // Card cho kế hoạch giá cao nhất
            Card::make('Kế Hoạch Giá Cao Nhất', number_format($maxPricingPlan) . ' VND')
                ->description('Kế hoạch giá có giá trị cao nhất')
                ->descriptionIcon('heroicon-s-arrow-up')
                ->color('warning'),
        ];
    }
}
