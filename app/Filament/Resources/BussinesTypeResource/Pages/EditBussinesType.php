<?php

namespace App\Filament\Resources\BussinesTypeResource\Pages;

use App\Filament\Resources\BussinesTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBussinesType extends EditRecord
{
    protected static string $resource = BussinesTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
