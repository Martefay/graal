<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroTitleResource\Pages;
use App\Filament\Resources\HeroTitleResource\RelationManagers;
use App\Models\HeroTitle;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroTitleResource extends Resource
{
    protected static ?string $model = HeroTitle::class;

      protected static ?string $modelLabel = 'Главный заголовок';
    
    protected static ?string $navigationLabel = 'Главный заголовок';

    protected static ?string $pluralModelLabel = 'Главный заголовок';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Заголовок')
                ->required(),
                MarkdownEditor::make('description')
                ->label('Описание')
                ->columnSpanFull()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 TextColumn::make('title')
                ->label('Заголовок'),
                TextColumn::make('description')
                ->label('Описание'),
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
            'index' => Pages\ListHeroTitles::route('/'),
            'create' => Pages\CreateHeroTitle::route('/create'),
            'edit' => Pages\EditHeroTitle::route('/{record}/edit'),
        ];
    }
}
