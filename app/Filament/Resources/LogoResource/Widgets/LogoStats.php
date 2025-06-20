<?php

namespace App\Filament\Resources\LogoResource\Widgets;

use App\Models\Logo;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LogoStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Активный логотип", Logo::query()->where('is_active', true)->count()),
        ];
    }
}
