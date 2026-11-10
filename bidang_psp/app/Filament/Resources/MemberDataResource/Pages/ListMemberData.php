<?php

namespace App\Filament\Resources\MemberDataResource\Pages;

use App\Filament\Resources\MemberDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMemberData extends ListRecords
{
    protected static string $resource = MemberDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
