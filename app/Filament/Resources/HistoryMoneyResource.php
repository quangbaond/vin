<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryMoneyResource\Pages;
use App\Filament\Resources\HistoryMoneyResource\RelationManagers;
use App\Models\HistoryMoney;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoryMoneyResource extends Resource
{
    protected static ?string $model = HistoryMoney::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Giao dịch tiền';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin giao dịch')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->label('Người dùng')
                            ->relationship('user', 'name'),
                        Forms\Components\TextInput::make('amount')
                            ->label('Số tiền'),
                        Forms\Components\Select::make('type')
                            ->label('Loại giao dịch')
                            ->options([
                                'deposit' => 'Nạp tiền',
                                'withdraw' => 'Rút tiền',
                            ]),
                        Forms\Components\Textarea::make('note')
                            ->label('Ghi chú'),
                        Forms\Components\Select::make('status')
                            ->label('Trạng thái')
                            ->options([
                                'pending' => 'Chờ xử lý',
                                'success' => 'Thành công',
                                'fail' => 'Thất bại',
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Người dùng')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->label('Số tiền'),
                Tables\Columns\TextColumn::make('type')
                    ->label('Loại giao dịch')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'deposit' => 'Nạp tiền',
                        'withdraw' => 'Rút tiền',
                    }),
                Tables\Columns\TextColumn::make('note')
                    ->label('Ghi chú'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'pending' => 'Chờ xử lý',
                        'success' => 'Thành công',
                        'fail' => 'Thất bại',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian tạo'),
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
            'index' => Pages\ListHistoryMoney::route('/'),
            'create' => Pages\CreateHistoryMoney::route('/create'),
            'edit' => Pages\EditHistoryMoney::route('/{record}/edit'),
        ];
    }
}
