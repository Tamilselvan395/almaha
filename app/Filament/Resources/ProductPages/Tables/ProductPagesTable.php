<?php

namespace App\Filament\Resources\ProductPages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductPagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Page Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('URL Slug')
                    ->searchable()
                    ->copyable()
                    ->badge()
                    ->color('gray'),
                TextColumn::make('meta_title')
                    ->label('Meta Title')
                    ->limit(40)
                    ->searchable(),
                IconColumn::make('status')
                    ->label('Active')
                    ->boolean(),
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
