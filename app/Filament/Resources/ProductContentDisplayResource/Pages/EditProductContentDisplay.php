<?php

namespace App\Filament\Resources\ProductContentDisplayResource\Pages;

use App\Filament\Resources\ProductContentDisplayResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductContentDisplay extends EditRecord
{
    protected static string $resource = ProductContentDisplayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
