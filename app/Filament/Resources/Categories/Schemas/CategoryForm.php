<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Grid;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Category Details')
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

                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('orderby')
                                            ->required()
                                            ->numeric()
                                            ->default(fn() => (Category::max('orderby') ?? 0) + 1),
                                        Toggle::make('status')
                                            ->default(true),
                                    ]),

                                RichEditor::make('description')
                                    ->columnSpanFull()
                                    ->extraInputAttributes([
                                        'style' => 'max-height: 400px; overflow-y: auto;',
                                    ]),
                            ]),

                        Tabs\Tab::make('Media')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image()
                                            ->disk('public')
                                            ->directory('Category')
                                            ->preserveFilenames(),

                                        FileUpload::make('pdf_image')
                                            ->label('PDF Image Brochure')
                                            ->acceptedFileTypes(['application/pdf'])
                                            ->disk('public')
                                            ->directory('Category')
                                            ->preserveFilenames(),
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
