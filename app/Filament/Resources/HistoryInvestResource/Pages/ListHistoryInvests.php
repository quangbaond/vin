<?php

namespace App\Filament\Resources\HistoryInvestResource\Pages;

use App\Filament\Resources\HistoryInvestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistoryInvests extends ListRecords
{
    protected static string $resource = HistoryInvestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
