<?php

namespace App\Filament\Resources\ProductContentDisplayResource\Pages;

use App\Filament\Resources\ProductContentDisplayResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductContentDisplays extends ListRecords
{
    protected static string $resource = ProductContentDisplayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
