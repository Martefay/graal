<?php

namespace App\Filament\Resources\ContactHeaderResource\Pages;

use App\Filament\Resources\ContactHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactHeaders extends ListRecords
{
    protected static string $resource = ContactHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
