<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Download;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DownloadResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DownloadResource\RelationManagers;

class DownloadResource extends Resource
{
    protected static ?string $model = Download::class;

    protected static ?string $navigationIcon = 'heroicon-s-document-arrow-down';
    protected static ?string $navigationGroup = 'Info';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Title')
                    ->required(),

                Forms\Components\FileUpload::make('file')
                    ->label('Upload File')
                    ->disk('public')
                    ->directory('uploads')
                    ->required()
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return $file->getClientOriginalName();
                    })
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $set('size', number_format($state->getSize() / 1024, 2) . ' KB'); // Konversi size ke KB
                            $set('type', strtoupper($state->getClientOriginalExtension())); // Ekstensi file

                        }
                    }),
                Forms\Components\TextInput::make('size')->default('Unknown'),
                Forms\Components\TextInput::make('type')->default('Unknown'),
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
                TextColumn::make('type')->label('Type')->searchable(),
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
            'index' => Pages\ListDownloads::route('/'),
            'create' => Pages\CreateDownload::route('/create'),
            'edit' => Pages\EditDownload::route('/{record}/edit'),
        ];
    }
}
