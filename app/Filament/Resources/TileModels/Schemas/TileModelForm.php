<?php

namespace App\Filament\Resources\TileModels\Schemas;

use App\Models\TileModel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class TileModelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),

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

                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('meta_title')
                    ->columnSpanFull(),
                Textarea::make('meta_description')
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('Tiles_model'),

                Toggle::make('status')
                    ->default(true),

                TextInput::make('orderby')
                    ->required()
                    ->numeric()
                    ->default(fn() => (TileModel::max('orderby') ?? 0) + 1),
            ]);
    }
}
