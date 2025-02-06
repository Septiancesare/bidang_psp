<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PLAResource\Pages;
use App\Filament\Resources\PLAResource\RelationManagers;
use App\Models\PembiayaanLahanAir;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PLAResource extends Resource
{
    protected static ?string $model = PembiayaanLahanAir::class;

    protected static ?string $navigationIcon = 'heroicon-s-scale';
    protected static ?string $navigationGroup = 'Detail Program';
    protected static ?string $navigationLabel = 'Subkoor Pembiayaan Lahan Air';

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
                //
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
            'index' => Pages\ListPLAS::route('/'),
            'create' => Pages\CreatePLA::route('/create'),
            'edit' => Pages\EditPLA::route('/{record}/edit'),
        ];
    }
}
