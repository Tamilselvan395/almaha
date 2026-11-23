<?php

namespace App\Filament\Resources\ProductPages\Pages;

use App\Filament\Resources\ProductPages\ProductPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProductPages extends ListRecords
{
    protected static string $resource = ProductPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
