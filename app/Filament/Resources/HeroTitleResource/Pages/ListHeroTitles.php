<?php

namespace App\Filament\Resources\HeroTitleResource\Pages;

use App\Filament\Resources\HeroTitleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroTitles extends ListRecords
{
    protected static string $resource = HeroTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
