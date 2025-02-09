<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Alsinta;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\AlatMesinPertanian;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AlsintaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AlsintaResource\RelationManagers;

class AlsintaResource extends Resource
{
    protected static ?string $model = AlatMesinPertanian::class;

    protected static ?string $navigationIcon = 'heroicon-s-wrench-screwdriver';
    protected static ?string $navigationGroup = 'Detail Program';
    protected static ?string $navigationLabel = 'Subkoor Alat Mesin Pertanian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Name Program')
                    ->placeholder('Write for program name')
                    ->required(),
                Forms\Components\TextInput::make('waktu')
                    ->label('Time')
                    ->placeholder('Write for time'),
                Forms\Components\FileUpload::make('gambar')
                    ->label('Image')
                    ->image()
                    ->directory('uploads')
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return $file->getClientOriginalName();
                    }),
                Forms\Components\RichEditor::make('deskripsi')
                    ->label('Description')
                    ->columnSpanFull()
                    ->placeholder('Write Description')
                    ->reactive()
                    ->dehydrateStateUsing(fn($state) => $state),
                Forms\Components\Hidden::make('image_upload_url')->dehydrateStateUsing(fn($state) => route('upload.image')),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Name Program')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('updated_at')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAlsintas::route('/'),
            'create' => Pages\CreateAlsinta::route('/create'),
            'edit' => Pages\EditAlsinta::route('/{record}/edit'),
        ];
    }
}
