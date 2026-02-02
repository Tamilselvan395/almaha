<?php

namespace App\Filament\Resources\TileModels\Pages;

use App\Filament\Resources\TileModels\TileModelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTileModels extends ListRecords
{
    protected static string $resource = TileModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
