<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\News;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\NewsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsResource\RelationManagers;
use Doctrine\DBAL\Schema\View;
use Filament\Tables\Columns\Layout\View as LayoutView;
use Filament\Tables\Columns\TextColumn;
use Illuminate\View\View as ViewView;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['creator'] = $data['creator'] ?? Auth::user()->id;
        return $data;
    }


    public static function form(Form $form): Form
    {
        $user = User::find(Auth::user()->id);

        return $form
            ->schema([

                //card
                Forms\Components\Card::make()
                    ->schema([

                        //grid
                        Forms\Components\Grid::make(2)
                            ->schema([

                                //title
                                Forms\Components\TextInput::make('title_news')
                                    ->label('Title')
                                    ->placeholder('Title')
                                    ->required(),

                                //category
                                Forms\Components\TextInput::make('creator')
                                    ->label('Pembuat')
                                    ->default($user->name)
                                    ->required()
                                    ->disabled(),
                            ]),

                        // image 
                        Forms\Components\FileUpload::make('image_news')
                            ->label('Image')
                            ->required()
                            ->image()
                            ->acceptedFileTypes(['image/jpeg', 'image/png']),

                        //content
                        Forms\Components\RichEditor::make('content_news')
                            ->label('Content')
                            ->columnSpanFull()
                            ->placeholder('Write news')
                            ->reactive()
                            ->required()
                            ->dehydrateStateUsing(fn($state) => $state),
                        Forms\Components\Hidden::make('image_upload_url')->dehydrateStateUsing(fn($state) => route('upload.image')),

                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_news')->searchable(),
                TextColumn::make('creator')->sortable(),
                TextColumn::make('updated_at')->sortable()
                    ->label('Updated At')
                    ->dateTime(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
