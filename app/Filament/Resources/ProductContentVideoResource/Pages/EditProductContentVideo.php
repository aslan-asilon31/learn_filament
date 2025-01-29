<?php

namespace App\Filament\Resources\ProductContentVideoResource\Pages;

use App\Filament\Resources\ProductContentVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductContentVideo extends EditRecord
{
    protected static string $resource = ProductContentVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
