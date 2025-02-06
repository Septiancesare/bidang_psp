<?php

namespace App\Filament\Resources\PLAResource\Pages;

use App\Filament\Resources\PLAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPLAS extends ListRecords
{
    protected static string $resource = PLAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
