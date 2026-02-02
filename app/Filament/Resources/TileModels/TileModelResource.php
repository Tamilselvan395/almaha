<?php

namespace App\Filament\Resources\TileModels;

use App\Filament\Resources\TileModels\Pages\CreateTileModel;
use App\Filament\Resources\TileModels\Pages\EditTileModel;
use App\Filament\Resources\TileModels\Pages\ListTileModels;
use App\Filament\Resources\TileModels\Pages\ViewTileModel;
use App\Filament\Resources\TileModels\Schemas\TileModelForm;
use App\Filament\Resources\TileModels\Schemas\TileModelInfolist;
use App\Filament\Resources\TileModels\Tables\TileModelsTable;
use App\Models\TileModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TileModelResource extends Resource
{
    protected static ?string $model = TileModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TileModelForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TileModelInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TileModelsTable::configure($table);
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
            'index' => ListTileModels::route('/'),
            'create' => CreateTileModel::route('/create'),
            'view' => ViewTileModel::route('/{record}'),
            'edit' => EditTileModel::route('/{record}/edit'),
        ];
    }
}
