<?php

namespace App\Filament\Resources\MetaDetailTables\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MetaDetailTableForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('index_meta_title'),
                TextInput::make('index_meta_description'),
                Textarea::make('index_schema')
                    ->columnSpanFull(),
                TextInput::make('about_meta_title'),
                TextInput::make('about_meta_description'),
                Textarea::make('about_schema')
                    ->columnSpanFull(),
                TextInput::make('contact_meta_title'),
                TextInput::make('contact_meta_description'),
                Textarea::make('contact_schema')
                    ->columnSpanFull(),
                TextInput::make('blog_meta_title'),
                TextInput::make('blog_meta_description'),
                Textarea::make('blog_schema')
                    ->columnSpanFull(),
                Textarea::make('all_page_scheme')
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->required(),
            ]);
    }
}
