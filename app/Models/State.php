<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    /**
     * Relación con los detalles del cliente
     */
    public function clientDetails(): BelongsTo
    {
        return $this->belongsTo(ClientDetail::class);
    }
}
