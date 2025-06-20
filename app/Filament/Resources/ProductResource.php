<?php

namespace App\Filament\Resources;

use Illuminate\Support\Str;
use Filament\Forms\Set;
use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Markdown;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationLabel = 'Модели';

    protected static ?string $modelLabel = 'Модель';

    protected static ?string $pluralModelLabel = 'Модели';

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Основная информация')->schema([
                        TextInput::make('name')
                            ->label('Название товара')
                            ->placeholder('Сумка-шоппер')
                            ->helperText('Например: Сумка-шоппер')
                            ->maxLength(255)
                            ->required(),
                        MarkdownEditor::make('specification')
                            ->columnSpanFull()
                    ])->columns(2),
                    Section::make('Изображение')->schema([
                        FileUpload::make('images')
                            ->image()
                            ->directory('models')
                            ->required(),
                    ])->columnSpanFull()
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make()->schema([
                        Select::make('category_id')
                            ->preload()
                            ->searchable()
                            ->placeholder('Выбрать категорию')
                            ->label('Выберите категорию')
                            ->relationship('category', 'name')
                            ->required(),
                    ])->columnSpanFull(),
                    Section::make('Цена')->schema([
                        TextInput::make('price')
                            ->numeric()
                            ->placeholder('1999')
                            ->helperText('Цена не должна быть меньше 0')
                            ->inputMode('decimal')
                            ->label('Укажите цену за 1 ед.')
                            ->suffix('₽')
                            ->required(),
                    ])->columnSpanFull(),
                    Section::make('Статус товара')->schema([
                        Toggle::make('is_active')
                            ->default(true)
                            ->label('Отображать на сайте'),
                    ])->columnSpanFull(),
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->sortable(),
                TextColumn::make('price')
                    ->money('RUB')
                    ->sortable(),
                ImageColumn::make('images'),
                IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
