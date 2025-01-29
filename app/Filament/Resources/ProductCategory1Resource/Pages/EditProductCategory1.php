<?php

namespace App\Filament\Resources\ProductCategory1Resource\Pages;

use App\Filament\Resources\ProductCategory1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductCategory1 extends EditRecord
{
    protected static string $resource = ProductCategory1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
