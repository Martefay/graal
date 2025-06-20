<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactFooterResource\Pages;
use App\Filament\Resources\ContactFooterResource\RelationManagers;
use App\Models\ContactFooter;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactFooterResource extends Resource
{
    protected static ?string $model = ContactFooter::class;
    
    protected static ?string $navigationLabel = 'Социальные сети';

    protected static ?string $modelLabel = 'Социальные сети';

    protected static ?string $pluralModelLabel = 'Социальные сети';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // protected static ?string $navigationGroup = 'Подвал';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('название социальной сети')
                    ->required(),
                TextInput::make('link')
                    ->label('ссылка на социальную сеть')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->label('Изображение')
                    ->directory('contactfooters')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('link')
                    ->searchable(),
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
            'index' => Pages\ListContactFooters::route('/'),
            'create' => Pages\CreateContactFooter::route('/create'),
            'edit' => Pages\EditContactFooter::route('/{record}/edit'),
        ];
    }
}
