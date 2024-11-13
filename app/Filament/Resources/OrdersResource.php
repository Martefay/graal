<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdersResource\Pages;
use App\Filament\Resources\OrdersResource\RelationManagers;
use App\Models\Order;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Number;

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
                                    ->reactive()
                                    ->required()
                                    ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                    ->afterStateUpdated(fn ($state, Set $set) => $set('unit_amount', Product::find($state)?-> price ?? 0 ))
                                    ->afterStateUpdated(fn ($state, Set $set) => $set('total_amount', Product::find($state)?-> price ?? 0 )),
                                TextInput::make("quantity")
                                    ->label('Укажите кол-во')
                                    ->numeric()
                                    ->default(1)
                                    ->minValue(1)
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, Set $set, Get $get) => $set('total_amount', $state * $get('unit_amount')))
                                    ->required(),
                                TextInput::make("unit_amount")
                                    ->numeric()
                                    ->label('Цена за шт.')
                                    ->disabled()
                                    ->required(),
                                TextInput::make("total_amount")
                                    ->label('Общая сумма')
                                    ->numeric()
                                    ->disabled()
                                    ->required(),
                            ])
                    ])->columnSpanFull(),

                    Placeholder::make('grand_total')
                        ->label('Общая сумма заказа')
                        ->content(function (Get $get, Set $set){
                            $total = 0;
                            if(!$repetears = $get('items')) {
                                return $total;
                            }
                            foreach($repetears as $key => $repetear) {
                                $total += $get("items.{$key}.total_amount");
                            }

                            return Number::currency($total, 'RUB');
                        }),
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
