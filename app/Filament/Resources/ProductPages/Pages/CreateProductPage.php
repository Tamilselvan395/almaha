<?php

namespace App\Filament\Resources\ProductPages\Pages;

use App\Filament\Resources\ProductPages\ProductPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProductPage extends CreateRecord
{
    protected static string $resource = ProductPageResource::class;
}
