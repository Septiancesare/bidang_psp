<?php

namespace App\Filament\Resources\MemberDataResource\Pages;

use App\Filament\Resources\MemberDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMemberData extends EditRecord
{
    protected static string $resource = MemberDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
