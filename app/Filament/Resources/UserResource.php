<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Support\RawJs;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Người dùng';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin cá nhân')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Họ và tên')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->label('Email'),
                        Forms\Components\TextInput::make('username')
                            ->label('Tên đăng nhập')
                            ->required(),
                        Forms\Components\TextInput::make('number_phone')
                            ->label('Số điện thoại'),
                        Forms\Components\TextInput::make('bankName')
                            ->label('Tên ngân hàng'),
                        Forms\Components\TextInput::make('bankNumber')
                            ->label('Số tài khoản'),
                        Forms\Components\TextInput::make('balance')
                            ->label('Số dư')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric(),
                        Forms\Components\TextInput::make('password')
                            ->label('Mật khẩu')
                            ->password()
                            ->required(fn (string $context): bool => $context === 'create'),
                        Forms\Components\Checkbox::make('is_admin')
                            ->label('Admin'),
                        Forms\Components\Select::make('status')
                            ->label('Trạng thái')
                            ->options([
                                1 => 'Hoạt động',
                                0 => 'Khóa',
                            ])
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable()
                    ->sortable(),
                // input balance
                Tables\Columns\TextInputColumn::make('balance')
                    ->label('Số dư')
                    ->rules(['required', 'numeric'])
                    ->type('number')
                        ->beforeStateUpdated(function ($record, $state) {
                            // save History deposit or withdraw
                            $type = $state > $record->balance ? 'deposit' : 'withdraw';
                            $money = $state > $record->balance ? $state - $record->balance : $record->balance - $state;
                            $record->historyMoney()->create([
                                'amount' => $money,
                                'user_id' => $record->id,
                                'type' => $type,
                                'status' => 'success',
                            ]);
                        })
                    ->sortable(),
                Tables\Columns\SelectColumn::make('is_admin')
                    ->label('Admin')
                    ->options([
                        1 => 'Có',
                        0 => 'Không',
                    ])
                    ->sortable(),
                Tables\Columns\SelectColumn::make('status')
                    ->label('Trạng thái')
                    ->options([
                        1 => 'Hoạt động',
                        0 => 'Khóa',
                    ])
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
