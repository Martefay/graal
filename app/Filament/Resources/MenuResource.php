<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationLabel = 'Меню';

    protected static ?string $modelLabel = 'Меню';

    protected static ?string $pluralModelLabel = 'Меню';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Group::make()->schema([
                    Section::make('Основная информация')->schema([
                        TextInput::make('name')
                            ->label('Название')
                            ->placeholder('Суп')
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('quantity')
                        ->placeholder('1шт/100гр')
                        ->label('Количество')
                        ->required(),
                    ]),
                ]),
                Group::make()->schema([
                    Section::make()->schema([
                        Select::make('categorymenu_id')
                            ->preload()
                            ->searchable()
                            ->placeholder('Выбрать категорию')
                            ->label('Выберите категорию')
                            ->relationship('categorymenu', 'name')
                            ->required(),
                    ]),
                    Section::make('Цена')->schema([
                        TextInput::make('price')
                            ->numeric()
                            ->placeholder('9999')
                            ->helperText('Цена не должна быть меньше 0')
                            ->inputMode('decimal')
                            ->label('Укажите цену')
                            ->suffix('₽')
                            ->required(),
                    ]),
                    Section::make('Статус товара')->schema([
                        Toggle::make('is_active')
                            ->default(true)
                            ->label('Отображать на сайте'),
                    ]),
                ])
            ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                    TextColumn::make('quantity')
                    ->label('Количество'),
                TextColumn::make('categorymenu.name')
                    ->sortable(),
                TextColumn::make('price')
                    ->money('RUB')
                    ->sortable(),
                IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
