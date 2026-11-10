<?php

namespace App\Filament\Resources\PenyuluhanResource\Pages;

use App\Filament\Resources\PenyuluhanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyuluhan extends EditRecord
{
    protected static string $resource = PenyuluhanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
