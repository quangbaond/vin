<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (!isset($data['password'])) {
            unset($data['password']);
        }

        if(isset($data['balance'])) {
            $record = $this->record;
            $state = $data['balance'];
            $type = $state > $record->balance ? 'deposit' : 'withdraw';
            $money = $state > $record->balance ? $state - $record->balance : $record->balance - $state;
            $record->historyMoney()->create([
                'amount' => $money,
                'user_id' => $record->id,
                'type' => $type,
                'status' => 'success',
            ]);

        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
