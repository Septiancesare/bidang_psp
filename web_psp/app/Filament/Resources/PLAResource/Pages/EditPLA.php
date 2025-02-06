<?php

namespace App\Filament\Resources\PLAResource\Pages;

use App\Filament\Resources\PLAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPLA extends EditRecord
{
    protected static string $resource = PLAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
