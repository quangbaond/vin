<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryInvestResource\Pages;
use App\Filament\Resources\HistoryInvestResource\RelationManagers;
use App\Models\HistoryInvest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoryInvestResource extends Resource
{
    protected static ?string $model = HistoryInvest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Đầu tư';

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
                        Forms\Components\Textarea::make('note')
                            ->label('Ghi chú')
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
                Tables\Columns\TextColumn::make('note')
                    ->label('Ghi chú'),
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
            'index' => Pages\ListHistoryInvests::route('/'),
            'create' => Pages\CreateHistoryInvest::route('/create'),
            'edit' => Pages\EditHistoryInvest::route('/{record}/edit'),
        ];
    }
}
