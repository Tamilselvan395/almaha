<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

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

                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->disabled()
                    ->dehydrated(),

                TextInput::make('tiles_code')
                    ->required(),

                TextInput::make('type_of_product'),

                TextInput::make('look')
                    ->required(),

                TextInput::make('price')
                    ->numeric()
                    ->prefix('₹'), // India friendly 🙂

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
                    ->acceptedFileTypes(['application/pdf'])
                    ->disk('public')
                    ->directory('brochures'),

                TextInput::make('meta_title'),

                Textarea::make('meta_description'),

                Toggle::make('status')
                    ->default(true),

                TextInput::make('orderby')
                    ->required()
                    ->numeric()
                    ->default(fn() => (Product::max('orderby') ?? 0) + 1),

                CheckboxList::make('features')
                    ->relationship('features', 'name')
                    ->columns(3)
                    ->label('Supported Features'),
            ]);
    }
}
