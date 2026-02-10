<?php

namespace App\Models;

use App\Enums\Region;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venue extends Model
{
    /** @use HasFactory<\Database\Factories\VenueFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'country',
        'postal_code',
        'region',
    ];

    protected $casts = [
        'region' => Region::class,
    ];

    public function conferences(): HasMany
    {
        return $this->hasMany(Conference::class);
    }
}
