<?php

namespace App\Filament\Resources\ProductContentFeatureResource\Pages;

use App\Filament\Resources\ProductContentFeatureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductContentFeature extends EditRecord
{
    protected static string $resource = ProductContentFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
