<?php

namespace App\Filament\Resources\ProductContentMetaResource\Pages;

use App\Filament\Resources\ProductContentMetaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductContentMeta extends EditRecord
{
    protected static string $resource = ProductContentMetaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
