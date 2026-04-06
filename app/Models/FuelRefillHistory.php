<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FuelRefillHistory extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'station_id',
        'fuel_type_id',
        'stock_amount',
        'buying_price',
    ];

    protected function casts(): array
    {
        return [
            'stock_amount' => 'decimal:2',
            'buying_price' => 'decimal:2',
            'created_at'   => 'datetime',
        ];
    }

    public function station(): BelongsTo
    {
        return $this->belongsTo(FuelStation::class, 'station_id');
    }

    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }
}
