<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'balance',
        'code',
        'is_admin',
        'number_phone',
        'bankName',
        'bankNumber',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function historyMoney(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HistoryMoney::class);
    }

    public function historyDeposit(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HistoryMoney::class)->where('type', 'deposit')->orderBy('created_at', 'desc');
    }

    public function historyWithdraw(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HistoryMoney::class)->where('type', 'withdraw')->orderBy('created_at', 'desc');
    }

    public function historyInvest(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HistoryInvest::class)->orderBy('created_at', 'desc');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin;
    }

    // balance text
    public function getBalanceTextAttribute(): string
    {
        return number_format($this->balance, 0, ',', '.');
    }

    public function lotos()
    {
        return $this->hasMany(Loto::class);
    }
}
