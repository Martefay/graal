<?php

namespace App\Filament\Resources\LogoResource\Pages;

use App\Filament\Resources\LogoResource;
use App\Filament\Resources\LogoResource\Widgets\LogoStats;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogos extends ListRecords
{
    protected static string $resource = LogoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            LogoStats::class,
        ];
    }
}
