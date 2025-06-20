<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CopyrightResource\Pages;
use App\Filament\Resources\CopyrightResource\RelationManagers;
use App\Models\Copyright;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class CopyrightResource extends Resource
{
    protected static ?string $model = Copyright::class;

    protected static ?string $navigationLabel = 'Копирайт';

    protected static ?string $modelLabel = 'Копирайт';

    protected static ?string $pluralModelLabel = 'Копирайт';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                MarkdownEditor::make('text')
                ->columnSpanFull()
                ->label('©'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('text')
                ->label('©')
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
            'index' => Pages\ListCopyrights::route('/'),
            'create' => Pages\CreateCopyright::route('/create'),
            'edit' => Pages\EditCopyright::route('/{record}/edit'),
        ];
    }
}
