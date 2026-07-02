<?php

namespace App\Filament\Resources\MetaDetailTables;

use App\Filament\Resources\MetaDetailTables\Pages\CreateMetaDetailTable;
use App\Filament\Resources\MetaDetailTables\Pages\EditMetaDetailTable;
use App\Filament\Resources\MetaDetailTables\Pages\ListMetaDetailTables;
use App\Filament\Resources\MetaDetailTables\Schemas\MetaDetailTableForm;
use App\Filament\Resources\MetaDetailTables\Tables\MetaDetailTablesTable;
use App\Models\MetaDetailTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MetaDetailTableResource extends Resource
{
    protected static ?string $model = MetaDetailTable::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static \UnitEnum|string|null $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return MetaDetailTableForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MetaDetailTablesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMetaDetailTables::route('/'),
            'create' => CreateMetaDetailTable::route('/create'),
            'edit' => EditMetaDetailTable::route('/{record}/edit'),
        ];
    }
}
