<?php

namespace App\Filament\Resources\TheoryResource\Pages;

use App\Filament\Resources\TheoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTheory extends EditRecord
{
    protected static string $resource = TheoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
