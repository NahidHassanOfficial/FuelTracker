<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FuelType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'unit',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }

    public function fuelStocks(): HasMany
    {
        return $this->hasMany(FuelStock::class);
    }

    public function fuelPrices(): HasMany
    {
        return $this->hasMany(FuelPrice::class);
    }

    public function refillHistories(): HasMany
    {
        return $this->hasMany(FuelRefillHistory::class);
    }

    public function sellRecords(): HasMany
    {
        return $this->hasMany(FuelSellRecord::class);
    }
}
