<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Grid;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Blog Details')
                    ->tabs([
                        Tabs\Tab::make('Content')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('title')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(
                                                fn($state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),
                                        TextInput::make('slug')
                                            ->required(),
                                    ]),

                                FileUpload::make('image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('blog')
                                    ->required(),

                                Toggle::make('status')
                                    ->default(true),

                                Textarea::make('short_description')
                                    ->required()
                                    ->columnSpanFull(),

                                RichEditor::make('long_description')
                                    ->label('Blog Content')
                                    ->columnSpanFull()
                                    ->extraInputAttributes([
                                        'style' => 'max-height: 400px; overflow-y: auto;',
                                    ])
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'h2',
                                        'h3',
                                        'bulletList',
                                        'orderedList',
                                        'blockquote',
                                        'undo',
                                        'redo',
                                    ])
                                    ->required()
                                    ->columnSpanFull(),
                            ]),

                        Tabs\Tab::make('SEO Settings')
                            ->icon('heroicon-o-globe-alt')
                            ->schema([
                                TextInput::make('meta_title')
                                    ->required()
                                    ->columnSpanFull(),
                                Textarea::make('meta_description')
                                    ->required()
                                    ->columnSpanFull()
                                    ->rows(3),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
