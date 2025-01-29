<?php

namespace App\Filament\Resources\ProductCategorySecondResource\Pages;

use App\Filament\Resources\ProductCategorySecondResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductCategorySecond extends EditRecord
{
    protected static string $resource = ProductCategorySecondResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
