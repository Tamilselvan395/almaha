<?php

namespace App\Filament\Resources\TileModels\Pages;

use App\Filament\Resources\TileModels\TileModelResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTileModel extends EditRecord
{
    protected static string $resource = TileModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
