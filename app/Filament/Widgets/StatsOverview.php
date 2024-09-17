<?php

namespace App\Filament\Widgets;

use App\Models\BussinesType;
use App\Models\CategoryInstruction;
use App\Models\Faq;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget

{


    protected static bool $isLazy = true;



    protected function getStats(): array
    {
        return [
            //
            Stat::make('Total Faq', Faq::count()),
            Stat::make('Total Category Instructions', CategoryInstruction::count()),
            Stat::make('Unique views', '192.1k')
                ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
