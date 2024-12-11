<?php

namespace App\Filament\Resources\LinhVucTuyenSinhResource\Pages;

use App\Filament\Resources\LinhVucTuyenSinhResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLinhVucTuyenSinhs extends ListRecords
{
    protected static string $resource = LinhVucTuyenSinhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
