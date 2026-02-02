<?php

namespace App\Filament\Resources\MetaDetailTables\Pages;

use App\Filament\Resources\MetaDetailTables\MetaDetailTableResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMetaDetailTables extends ListRecords
{
    protected static string $resource = MetaDetailTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
