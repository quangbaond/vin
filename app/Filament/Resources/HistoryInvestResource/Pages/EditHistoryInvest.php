<?php

namespace App\Filament\Resources\HistoryInvestResource\Pages;

use App\Filament\Resources\HistoryInvestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistoryInvest extends EditRecord
{
    protected static string $resource = HistoryInvestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
