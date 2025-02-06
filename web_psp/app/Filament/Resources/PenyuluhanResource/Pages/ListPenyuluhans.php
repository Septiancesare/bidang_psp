<?php

namespace App\Filament\Resources\PenyuluhanResource\Pages;

use App\Filament\Resources\PenyuluhanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenyuluhans extends ListRecords
{
    protected static string $resource = PenyuluhanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
