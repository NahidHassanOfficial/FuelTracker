<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FuelStation extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'division_id',
        'district_id',
        'upazila_id',
        'lat',
        'long',
        'phone',
        'email',
        'password',
        'logo',
        'status',
        'is_verified',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'lat' => 'decimal:7',
            'long' => 'decimal:7',
            'status' => 'boolean',
            'is_verified' => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function upazila(): BelongsTo
    {
        return $this->belongsTo(Upazila::class);
    }

    public function staffs(): HasMany
    {
        return $this->hasMany(FuelStationStaff::class, 'station_id');
    }

    public function fuelStocks(): HasMany
    {
        return $this->hasMany(FuelStock::class, 'station_id');
    }

    public function fuelPrices(): HasMany
    {
        return $this->hasMany(FuelPrice::class, 'station_id');
    }

    public function refillHistories(): HasMany
    {
        return $this->hasMany(FuelRefillHistory::class, 'station_id');
    }

    public function sellRecords(): HasMany
    {
        return $this->hasMany(FuelSellRecord::class, 'station_id');
    }
}
