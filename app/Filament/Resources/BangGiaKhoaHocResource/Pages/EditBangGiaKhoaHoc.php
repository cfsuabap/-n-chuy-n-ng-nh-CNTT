<?php

namespace App\Filament\Resources\BangGiaKhoaHocResource\Pages;

use App\Filament\Resources\BangGiaKhoaHocResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBangGiaKhoaHoc extends EditRecord
{
    protected static string $resource = BangGiaKhoaHocResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
