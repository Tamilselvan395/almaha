<?php

namespace App\Filament\Resources\Sizes\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SizeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('width'),
                TextEntry::make('height'),
                TextEntry::make('label'),
                TextEntry::make('slug'),
                IconEntry::make('status')
                    ->boolean(),
                TextEntry::make('orderby')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
