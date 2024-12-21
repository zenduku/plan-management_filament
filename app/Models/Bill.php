<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'precio_total',
        'image',
        'bill_code',
        'afiliation',
        'paid'
    ];

    public function clientDetail(): BelongsTo
    {
        return $this->belongsTo(ClientDetail::class);
    }

}
