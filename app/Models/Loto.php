<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'money',
        'result_money',
        'room',
        'total_money',
        'result',
        'phien_id',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
