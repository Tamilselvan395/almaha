<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('short_description')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('long_description')
                    ->label('Blog Content')
                    ->columnSpanFull()
                    ->extraAttributes([
                        'style' => 'height: 500px;overflow-y:scroll;',
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
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('blog')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('meta_title')
                    ->required(),
                Textarea::make('meta_description')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->default(true),
            ]);
    }
}
