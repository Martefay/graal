<?php

namespace App\Filament\Resources\ContactFooterResource\Pages;

use App\Filament\Resources\ContactFooterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactFooter extends EditRecord
{
    protected static string $resource = ContactFooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
