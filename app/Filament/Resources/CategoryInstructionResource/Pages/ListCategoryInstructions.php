<?php

namespace App\Filament\Resources\CategoryInstructionResource\Pages;

use App\Filament\Resources\CategoryInstructionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryInstructions extends ListRecords
{
    protected static string $resource = CategoryInstructionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
