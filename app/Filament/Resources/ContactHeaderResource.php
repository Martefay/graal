<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactHeaderResource\Pages;
use App\Filament\Resources\ContactHeaderResource\RelationManagers;
use App\Models\ContactHeader;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactHeaderResource extends Resource
{
    protected static ?string $model = ContactHeader::class;

    protected static ?string $navigationLabel = 'Контакты';

    protected static ?string $modelLabel = 'Контакты';

    protected static ?string $pluralModelLabel = 'Контакты';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // protected static ?string $navigationGroup = 'Шапка';

    public static function form(Form $form): Form
    {
        return $form
        
            ->schema([
                
               Repeater::make('timetables')
               ->label('График работы')
    ->relationship('timetables')
    ->schema([
        TextInput::make('schedule')
                    ->placeholder('Пн-Пт: с 09:00 до 17:00')
                    ->label('График работы')
                    ->required(),
    ]),
    Repeater::make('phones')
    ->label('Телефоны')
    ->relationship('phones')
    ->schema([
        TextInput::make('number')
                    ->tel()
                    ->placeholder('+12345678901')
                    ->label('Номер телефона')
                    ->required(),
    ]),
    Repeater::make('addresses')
    ->label('Адреса')
    ->relationship('addresses')
    ->schema([
        TextInput::make('place')
                    ->placeholder('Волгоградская, Адресс 12')
                    ->label('Адрес')
                    ->required(),
                    TextInput::make('link')
                    ->placeholder('ссылка на яндекс карты')
                    ->label('Ссылка')
                    ->required(),
    ]),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('timetables.schedule')
                ->label('Графики работ')
                ->formatStateUsing(function ($state, $record){
                    return $record->timetables->pluck('schedule')->implode(', ');
                }),
                TextColumn::make('phones.number')
                ->label('Телефоны')
                ->formatStateUsing(function ($state, $record){
                    return $record->phones->pluck('number')->implode(', ');
                }),
                TextColumn::make('addresses.place')
                ->label('Адреса')
                ->formatStateUsing(function ($state, $record){
                    return $record->addresses->pluck('place')->implode(', ');
                }),
                TextColumn::make('created_at')
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
            'index' => Pages\ListContactHeaders::route('/'),
            'create' => Pages\CreateContactHeader::route('/create'),
            'edit' => Pages\EditContactHeader::route('/{record}/edit'),
        ];
    }
}
