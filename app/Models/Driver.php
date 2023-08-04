<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'sim',
        'ktp',
        'phone',
    ];

    public function vehicle(): HasOne
    {
        return $this->hasOne(Vehicle::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
