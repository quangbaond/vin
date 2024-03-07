<?php

namespace App\Filament\Resources\HistoryMoneyResource\Pages;

use App\Filament\Resources\HistoryMoneyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistoryMoney extends EditRecord
{
    protected static string $resource = HistoryMoneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
