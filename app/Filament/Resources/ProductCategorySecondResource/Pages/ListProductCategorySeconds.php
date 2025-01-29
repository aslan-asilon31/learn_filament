<?php

namespace App\Filament\Resources\ProductCategorySecondResource\Pages;

use App\Filament\Resources\ProductCategorySecondResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductCategorySeconds extends ListRecords
{
    protected static string $resource = ProductCategorySecondResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
