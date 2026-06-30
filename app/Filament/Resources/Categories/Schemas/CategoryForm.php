<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
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
                    ->unique(ignoreRecord: true)
                    ->disabled()
                    ->dehydrated(),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('Category'),

                FileUpload::make('pdf_image')
                    ->acceptedFileTypes(['application/pdf'])
                    ->disk('public')
                    ->directory('Category'),

                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('meta_title'),
                Textarea::make('meta_description')
                    ->columnSpanFull(),

                Toggle::make('status')
                    ->default(true),

                TextInput::make('orderby')
                    ->required()
                    ->numeric()
                    ->default(fn() => (Category::max('orderby') ?? 0) + 1),
            ]);
    }
}
