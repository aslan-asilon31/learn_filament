<?php

namespace App\Filament\Resources\ProductContentResource\Pages;

use App\Filament\Resources\ProductContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductContent extends EditRecord
{
    protected static string $resource = ProductContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
