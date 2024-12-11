<?php

namespace App\Filament\Resources\DangKyKhoaHocResource\Pages;

use App\Filament\Resources\DangKyKhoaHocResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDangKyKhoaHoc extends EditRecord
{
    protected static string $resource = DangKyKhoaHocResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
