<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Product Details')
                    ->tabs([
                        Tabs\Tab::make('General Info')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('name')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(
                                                fn($state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),
                                        TextInput::make('slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->disabled()
                                            ->dehydrated(),
                                    ]),

                                Grid::make(3)
                                    ->schema([
                                        TextInput::make('tiles_code')
                                            ->required(),
                                        TextInput::make('type_of_product'),
                                        TextInput::make('look')
                                            ->required(),
                                    ]),

                                Grid::make(3)
                                    ->schema([
                                        TextInput::make('price')
                                            ->numeric()
                                            ->prefix('₹'), // Keep original India prefix
                                        TextInput::make('orderby')
                                            ->required()
                                            ->numeric()
                                            ->default(fn() => (Product::max('orderby') ?? 0) + 1),
                                        Toggle::make('status')
                                            ->default(true),
                                    ]),

                                RichEditor::make('description')
                                    ->required()
                                    ->columnSpanFull()
                                    ->extraInputAttributes([
                                        'style' => 'max-height: 400px; overflow-y: auto;',
                                    ]),
                             ]),

                        Tabs\Tab::make('Associations')
                            ->icon('heroicon-o-link')
                            ->schema([
                                Grid::make(3)
                                    ->schema([
                                        Select::make('tile_model_id')
                                            ->relationship('tile_model', 'name')
                                            ->required()
                                            ->searchable(),
                                        Select::make('size_id')
                                            ->relationship('size', 'label')
                                            ->required()
                                            ->searchable(),
                                        Select::make('color_id')
                                            ->relationship('color', 'name')
                                            ->required()
                                            ->searchable(),
                                    ]),

                                Section::make('Supported Features')
                                    ->description('Select the features that this product supports.')
                                    ->schema([
                                        CheckboxList::make('features')
                                            ->relationship('features', 'name')
                                            ->columns(3)
                                            ->label('Features List'),
                                    ]),
                            ]),

                        Tabs\Tab::make('Media')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Images / Videos')
                                            ->multiple()
                                            ->disk('public')
                                            ->directory('products')
                                            ->acceptedFileTypes([
                                                'image/jpeg',
                                                'image/png',
                                                'image/webp',
                                                'video/mp4',
                                                'video/webm',
                                                'video/ogg',
                                            ])
                                            ->maxSize(2048)
                                            ->reorderable(),

                                        FileUpload::make('brochure_pdf')
                                            ->label('Brochure (PDF)')
                                            ->acceptedFileTypes(['application/pdf'])
                                            ->disk('public')
                                            ->directory('brochures'),
                                    ]),
                            ]),

                        Tabs\Tab::make('SEO Settings')
                            ->icon('heroicon-o-globe-alt')
                            ->schema([
                                TextInput::make('meta_title')
                                    ->columnSpanFull(),
                                Textarea::make('meta_description')
                                    ->columnSpanFull()
                                    ->rows(3),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
