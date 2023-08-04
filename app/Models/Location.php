<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'distance',
        'salary',
        'fuel',
    ];

    public function contract(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
