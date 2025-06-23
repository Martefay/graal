<?php

namespace App\Filament\Resources;

use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\FormBronResource\Pages;
use App\Filament\Resources\FormBronResource\RelationManagers;
use App\Models\FormBron;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormBronResource extends Resource
{
    protected static ?string $model = FormBron::class;
    
    protected static ?string $navigationLabel = 'Форма бронирования';

    protected static ?string $modelLabel = 'Форма бронирования';

    protected static ?string $pluralModelLabel = 'Форма бронирования';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Фио')
                    ->searchable(),
                    TextColumn::make('date')
                    ->label('Дата')
                    ->searchable(),
                    TextColumn::make('time')
                    ->label('Время')
                    ->searchable(),
                    TextColumn::make('phone')
                    ->label('Номер телефона')
                    ->searchable(),
                    TextColumn::make('guest')
                    ->label('Количество гостей')
                    ->searchable(),
                    TextColumn::make('up')
                    ->label('Количество гостей')
                    ->searchable(),
                    TextColumn::make('created_at')
                    ->label('Заявка отправлена')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListForms::route('/'),
            'create' => Pages\CreateForm::route('/create'),
            'edit' => Pages\EditForm::route('/{record}/edit'),
        ];
    }
}
