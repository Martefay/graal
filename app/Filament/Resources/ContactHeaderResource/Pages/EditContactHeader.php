<?php

namespace App\Filament\Resources\ContactHeaderResource\Pages;

use App\Filament\Resources\ContactHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactHeader extends EditRecord
{
    protected static string $resource = ContactHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
