<?php

namespace App\Filament\Resources\OrdersResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrdersStatic extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Новые заказы", Order::query()->where('status', 'new')->count()),
            Stat::make("В обработке", Order::query()->where('status', 'processing')->count()),
            Stat::make("Ожидают оплаты", Order::query()->where('pay_status', 'pending')->count())
        ];
    }
}
