<?php

namespace App\Filament\Resources\ProductContentMarketplaceResource\Pages;

use App\Filament\Resources\ProductContentMarketplaceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductContentMarketplace extends EditRecord
{
    protected static string $resource = ProductContentMarketplaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
