<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Speaker extends Model
{
    /** @use HasFactory<\Database\Factories\SpeakerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'bio',
        'twitter_handle',
    ];

    protected $casts = [
        'qualifications' => 'array',
    ];

    public function conferences(): BelongsToMany
    {
        return $this->belongsToMany(Conference::class);
    }

    public function talks(): HasMany
    {
        return $this->hasMany(Talk::class);
    }
}
