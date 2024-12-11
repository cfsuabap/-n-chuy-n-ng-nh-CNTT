<?php

namespace App\Filament\Resources\BangGiaKhoaHocResource\Pages;

use App\Filament\Resources\BangGiaKhoaHocResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBangGiaKhoaHocs extends ListRecords
{
    protected static string $resource = BangGiaKhoaHocResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
