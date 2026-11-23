<?php

namespace App\Filament\Resources\ProductPages\Pages;

use App\Filament\Resources\ProductPages\ProductPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProductPage extends EditRecord
{
    protected static string $resource = ProductPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
