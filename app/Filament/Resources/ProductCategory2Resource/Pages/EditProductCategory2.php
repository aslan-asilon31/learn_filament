<?php

namespace App\Filament\Resources\ProductCategory2Resource\Pages;

use App\Filament\Resources\ProductCategory2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductCategory2 extends EditRecord
{
    protected static string $resource = ProductCategory2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
