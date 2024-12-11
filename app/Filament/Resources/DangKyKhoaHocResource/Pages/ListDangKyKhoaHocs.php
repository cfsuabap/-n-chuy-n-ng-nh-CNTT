<?php

namespace App\Filament\Resources\DangKyKhoaHocResource\Pages;

use App\Filament\Resources\DangKyKhoaHocResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDangKyKhoaHocs extends ListRecords
{
    protected static string $resource = DangKyKhoaHocResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
