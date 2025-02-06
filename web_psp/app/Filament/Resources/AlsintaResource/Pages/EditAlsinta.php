<?php

namespace App\Filament\Resources\AlsintaResource\Pages;

use App\Filament\Resources\AlsintaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlsinta extends EditRecord
{
    protected static string $resource = AlsintaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
