<?php

namespace App\Filament\Resources\ProductContentQnaResource\Pages;

use App\Filament\Resources\ProductContentQnaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductContentQnas extends ListRecords
{
    protected static string $resource = ProductContentQnaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
