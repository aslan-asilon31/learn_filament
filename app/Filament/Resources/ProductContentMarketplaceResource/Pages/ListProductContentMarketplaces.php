<?php

namespace App\Filament\Resources\ProductContentMarketplaceResource\Pages;

use App\Filament\Resources\ProductContentMarketplaceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductContentMarketplaces extends ListRecords
{
    protected static string $resource = ProductContentMarketplaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
