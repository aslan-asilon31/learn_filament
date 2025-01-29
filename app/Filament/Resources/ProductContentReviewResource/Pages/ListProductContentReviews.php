<?php

namespace App\Filament\Resources\ProductContentReviewResource\Pages;

use App\Filament\Resources\ProductContentReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductContentReviews extends ListRecords
{
    protected static string $resource = ProductContentReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
