<?php

namespace App\Filament\Resources\Sizes\Schemas;

use App\Models\Size;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class SizeForm
{
    public static function configure(Schema $schema): Schema
    {
        $updateLabelAndSlug = function (callable $get, callable $set) {
            if ($get('width') && $get('height')) {
                $label = $get('width') . ' × ' . $get('height') . ' CM';

                $set('label', $label);
                $set('slug', Str::slug($label));
            }
        };

        return $schema
            ->components([

                TextInput::make('width')
                    ->required()
                    ->numeric()
                    ->live()
                    ->afterStateUpdated(fn ($state, callable $get, callable $set)
                        => $updateLabelAndSlug($get, $set)
                    ),

                TextInput::make('height')
                    ->required()
                    ->numeric()
                    ->live()
                    ->afterStateUpdated(fn ($state, callable $get, callable $set)
                        => $updateLabelAndSlug($get, $set)
                    ),

                TextInput::make('label')
                    ->required()
                    ->disabled()
                    ->dehydrated(),

                TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->dehydrated(),

                Toggle::make('status')
                    ->required(),

                TextInput::make('orderby')
                    ->required()
                    ->numeric()
                    ->default(fn () => (Size::max('orderby') ?? 0) + 1),
            ]);
    }
}
