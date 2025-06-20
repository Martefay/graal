<?php

namespace App\Filament\Resources\ContactFooterResource\Pages;

use App\Filament\Resources\ContactFooterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactFooters extends ListRecords
{
    protected static string $resource = ContactFooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
