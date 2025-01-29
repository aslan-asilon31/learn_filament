<?php

namespace App\Filament\Resources\ProductCategoryFirstResource\Pages;

use App\Filament\Resources\ProductCategoryFirstResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductCategoryFirst extends EditRecord
{
    protected static string $resource = ProductCategoryFirstResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
