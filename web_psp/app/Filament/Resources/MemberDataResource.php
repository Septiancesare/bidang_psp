<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberDataResource\Pages;
use App\Filament\Resources\MemberDataResource\RelationManagers;
use App\Models\MemberData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberDataResource extends Resource
{
    protected static ?string $model = MemberData::class;

    protected static ?string $navigationIcon = 'heroicon-s-users';
    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_member')
                    ->label('Name')
                    ->placeholder('Name')
                    ->required(),
                Forms\Components\Radio::make('position_member')
                    ->label('Position')
                    ->options([
                        'Kepala Bidang' => 'Kepala Bidang',
                        'Kepala Seksi' => 'Kepala Seksi',
                        'Staff' => 'Staff',
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('image_member')
                    ->label('Image')
                    ->required()
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return $file->getClientOriginalName();
                    }),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_member')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('position_member')
                    ->label('Position')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMemberData::route('/'),
            'create' => Pages\CreateMemberData::route('/create'),
            'edit' => Pages\EditMemberData::route('/{record}/edit'),
        ];
    }
}
