<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdersResource\Pages;
use App\Filament\Resources\OrdersResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Информация о заказе')->schema([
                        Select::make('user_id')
                            ->label('Покупатель')
                            ->helperText('Список пользователей')
                            ->relationship("user", "name")
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('pay_method')
                            ->options([
                                'stripe' => "Оплата картой",
                                "cod" => "Оплата при получении"
                            ])
                            ->label('Тип оплаты')
                            ->helperText('Выберите тип оплаты')
                            ->required(),
                        Select::make('pay_status')->options([
                                "success" => "Оплачено",
                                "pending" => "В обработке",
                                "failed" => "Отказано"
                            ])
                            ->default('pending')
                            ->label('Статус оплаты')
                            ->helperText('Выберите статус оплаты')
                            ->required(),
                        ToggleButtons::make('status')
                            ->options([
                                "new" => "Новый",
                                "processing" => "Обработка",
                                "shipeed" => "Ожидает",
                                "delivered" => "Доставлен",
                                "canceled" => "Отменен",
                            ])
                            ->colors([
                                "new" => "info",
                                "processing" => "warning",
                                "shipeed" => "success",
                                "delivered" => "success",
                                "canceled" => "danger",
                            ])
                            ->icons([
                                "new" => "heroicon-m-sparkles",
                                "processing" => "heroicon-m-arrow-path",
                                "shipeed" => "heroicon-m-clock",
                                "delivered" => "heroicon-m-truck",
                                "canceled" => "heroicon-m-no-symbol",
                            ])
                            ->label('Статус')
                            ->default('new')
                            ->inline(),
                        Select::make('currency')->options([
                                "rub" => "Руб.",
                                "usd" => "Доллар",
                                "eur" => "Евро",
                                "dol" => "Долгих",
                            ])
                            ->label('Валюта оплаты')
                            ->helperText('Выберите валюту для оплаты'),
                        Select::make('shipping_method')->options([
                            "sdek" => "СДЭК",
                            "pek" => "ПЭК",
                            "nefr" => "НЕФР",
                        ])
                        ->label('Доставка'),
                        Textarea::make("notes")
                            ->label("Примечания")
                            ->helperText("Например: осторожно, хрупкий груз")
                    ])->columnSpanFull(),
                    Section::make("Список товаров")->schema([
                        Repeater::make("items")
                            ->label('Позиция товара')
                            ->relationship()
                            ->schema([
                                Select::make("product_id")
                                    ->label('Товар')
                                    ->helperText("Выберите товар")
                                    ->relationship("product", "name")
                                    ->preload()
                                    ->searchable()
                                    ->required(),
                                TextInput::make("quantity")
                                    ->label('Укажите кол-во')
                                    ->numeric()
                                    ->default(1)
                                    ->minValue(1)
                                    ->required(),
                                TextInput::make("unit_amount")
                                    ->numeric()
                                    ->disabled()
                                    ->required(),
                                TextInput::make("total_amount")
                                    ->numeric()
                                    ->required(),
                            ])
                    ])->columnSpanFull(),
                ]),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrders::route('/create'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }
}
