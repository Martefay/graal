<?php

namespace App\Filament\Resources\HeroTitleResource\Pages;

use App\Filament\Resources\HeroTitleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroTitle extends EditRecord
{
    protected static string $resource = HeroTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
