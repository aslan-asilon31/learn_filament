<?php

namespace App\Filament\Resources\ProductCategory2Resource\Pages;

use App\Filament\Resources\ProductCategory2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductCategory2s extends ListRecords
{
    protected static string $resource = ProductCategory2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
