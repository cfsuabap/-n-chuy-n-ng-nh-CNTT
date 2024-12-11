<?php

namespace App\Filament\Resources\TheoryResource\Pages;

use App\Filament\Resources\TheoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTheories extends ListRecords
{
    protected static string $resource = TheoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
