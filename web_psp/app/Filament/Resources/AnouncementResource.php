<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Anouncement;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnouncementResource\Pages;
use App\Filament\Resources\AnouncementResource\RelationManagers;

class AnouncementResource extends Resource
{
    protected static ?string $model = Anouncement::class;

    protected static ?string $navigationIcon = 'heroicon-s-megaphone';
    protected static ?string $navigationGroup = 'Info';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Title')
                    ->required(),

                //content
                Forms\Components\RichEditor::make('content')
                    ->label('Content')
                    ->columnSpanFull()
                    ->placeholder('Write anouncement content')
                    ->reactive()
                    ->required()
                    ->dehydrateStateUsing(fn($state) => $state),
                Forms\Components\Hidden::make('image_upload_url')->dehydrateStateUsing(fn($state) => route('upload.image')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('updated_at')->sortable()
                    ->label('Updated At')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListAnouncements::route('/'),
            'create' => Pages\CreateAnouncement::route('/create'),
            'edit' => Pages\EditAnouncement::route('/{record}/edit'),
        ];
    }
}
