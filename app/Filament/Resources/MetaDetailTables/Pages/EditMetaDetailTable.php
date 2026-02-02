<?php

namespace App\Filament\Resources\MetaDetailTables\Pages;

use App\Filament\Resources\MetaDetailTables\MetaDetailTableResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMetaDetailTable extends EditRecord
{
    protected static string $resource = MetaDetailTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
