<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCategory2Resource\Pages;
use App\Filament\Resources\ProductCategory2Resource\RelationManagers;
use App\Models\ProductCategory2;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductCategory2Resource extends Resource
{
    protected static ?string $model = ProductCategory2::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductCategory2s::route('/'),
            'create' => Pages\CreateProductCategory2::route('/create'),
            'edit' => Pages\EditProductCategory2::route('/{record}/edit'),
        ];
    }
}
