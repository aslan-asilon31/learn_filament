<?php

namespace App\Filament\Resources\ProductContentResource\Pages;

use App\Filament\Resources\ProductContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductContents extends ListRecords
{
    protected static string $resource = ProductContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
