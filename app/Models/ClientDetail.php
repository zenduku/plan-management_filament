<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ClientDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'identification_card',
        'phone',
    ];
     /**
     * Relación con el usuario
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
     /**
     * Relación con el plan
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
     /**
     * Relación con el estado
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
