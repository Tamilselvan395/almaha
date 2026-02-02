<?php

namespace App\Filament\Resources\MetaDetailTables\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MetaDetailTablesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index_meta_title')
                    ->searchable(),
                TextColumn::make('index_meta_description')
                    ->searchable(),
                TextColumn::make('about_meta_title')
                    ->searchable(),
                TextColumn::make('about_meta_description')
                    ->searchable(),
                TextColumn::make('contact_meta_title')
                    ->searchable(),
                TextColumn::make('contact_meta_description')
                    ->searchable(),
                TextColumn::make('blog_meta_title')
                    ->searchable(),
                TextColumn::make('blog_meta_description')
                    ->searchable(),
                IconColumn::make('status')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
