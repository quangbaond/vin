<?php

namespace App\Filament\Resources\HistoryMoneyResource\Pages;

use App\Filament\Resources\HistoryMoneyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistoryMoney extends ListRecords
{
    protected static string $resource = HistoryMoneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
