<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BussinesTypeResource\Pages;
use App\Filament\Resources\BussinesTypeResource\RelationManagers;
use App\Models\BussinesType;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BussinesTypeResource extends Resource
{
    protected static ?string $model = BussinesType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title')->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('image')->collection('images_bussines_type')->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')->label('Judul'),
                SpatieMediaLibraryImageColumn::make('Image')->collection('images_bussines_type')->height(100)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListBussinesTypes::route('/'),
            'create' => Pages\CreateBussinesType::route('/create'),
            'edit' => Pages\EditBussinesType::route('/{record}/edit'),
        ];
    }
}
