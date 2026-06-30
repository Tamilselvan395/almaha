<?php

namespace App\Filament\Resources\Colors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use App\Models\Color;

class ColorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('hex_code'),

                FileUpload::make('image')
                    ->image(),

                Toggle::make('status')
                    ->default(true),

                TextInput::make('orderby')
                    ->required()
                    ->numeric()
                    ->default(fn() => (Color::max('orderby') ?? 0) + 1),
            ]);
    }
}
