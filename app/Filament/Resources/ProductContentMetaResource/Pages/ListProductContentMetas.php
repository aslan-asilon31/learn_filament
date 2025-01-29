<?php

namespace App\Filament\Resources\ProductContentMetaResource\Pages;

use App\Filament\Resources\ProductContentMetaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductContentMetas extends ListRecords
{
    protected static string $resource = ProductContentMetaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
