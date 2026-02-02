<?php

namespace App\Filament\Resources\TileModels\Pages;

use App\Filament\Resources\TileModels\TileModelResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTileModel extends ViewRecord
{
    protected static string $resource = TileModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
