<?php

namespace App\Filament\Resources\PositionsResource\Pages;

use App\Filament\Resources\PositionsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePositions extends CreateRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static string $resource = PositionsResource::class;
}
