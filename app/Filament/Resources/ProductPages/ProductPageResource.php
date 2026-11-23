<?php

namespace App\Filament\Resources\ProductPages;

use App\Filament\Resources\ProductPages\Pages\CreateProductPage;
use App\Filament\Resources\ProductPages\Pages\EditProductPage;
use App\Filament\Resources\ProductPages\Pages\ListProductPages;
use App\Filament\Resources\ProductPages\Schemas\ProductPageForm;
use App\Filament\Resources\ProductPages\Tables\ProductPagesTable;
use App\Models\ProductPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductPageResource extends Resource
{
    protected static ?string $model = ProductPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentDuplicate;

    protected static ?string $navigationLabel = 'SEO Products';

    protected static ?string $modelLabel = 'SEO Product';

    protected static ?string $pluralModelLabel = 'SEO Products';

    protected static ?string $recordTitleAttribute = 'name';

    protected static \UnitEnum|string|null $navigationGroup = 'Catalog';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return ProductPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductPagesTable::configure($table);
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
            'index' => ListProductPages::route('/'),
            'create' => CreateProductPage::route('/create'),
            'edit' => EditProductPage::route('/{record}/edit'),
        ];
    }
}
