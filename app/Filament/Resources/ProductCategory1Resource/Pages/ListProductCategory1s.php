<?php

namespace App\Filament\Resources\ProductCategory1Resource\Pages;

use App\Filament\Resources\ProductCategory1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductCategory1s extends ListRecords
{
    protected static string $resource = ProductCategory1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
