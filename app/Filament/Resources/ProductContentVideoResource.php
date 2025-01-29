<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductContentVideoResource\Pages;
use App\Filament\Resources\ProductContentVideoResource\RelationManagers;
use App\Models\ProductContentVideo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductContentVideoResource extends Resource
{
    protected static ?string $model = ProductContentVideo::class;

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
            'index' => Pages\ListProductContentVideos::route('/'),
            'create' => Pages\CreateProductContentVideo::route('/create'),
            'edit' => Pages\EditProductContentVideo::route('/{record}/edit'),
        ];
    }
}
