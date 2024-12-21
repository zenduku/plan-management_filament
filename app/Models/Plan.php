<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'cost',
        'recurrence'
    ];

    protected $casts = [
        'cost' => 'decimal:2',
        'recurrence' => 'integer',
    ];  
    /**
     * Relación con los detalles del cliente
     */
    public function clientDetails(): HasMany
    {
        return $this->hasMany(ClientDetail::class);
    }
}
