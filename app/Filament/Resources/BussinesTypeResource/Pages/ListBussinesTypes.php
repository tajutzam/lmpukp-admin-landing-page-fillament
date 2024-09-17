<?php

namespace App\Filament\Resources\BussinesTypeResource\Pages;

use App\Filament\Resources\BussinesTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBussinesTypes extends ListRecords
{
    protected static string $resource = BussinesTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
