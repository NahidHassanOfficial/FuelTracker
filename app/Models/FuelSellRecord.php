<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FuelSellRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'station_id',
        'staff_id',
        'vehicle_no',
        'fuel_type_id',
        'purchase_unit',
        'price_per_unit',
        'total_price',
    ];

    protected function casts(): array
    {
        return [
            'purchase_unit'  => 'decimal:2',
            'price_per_unit' => 'decimal:2',
            'total_price'    => 'decimal:2',
        ];
    }

    public function station(): BelongsTo
    {
        return $this->belongsTo(FuelStation::class, 'station_id');
    }

    public function staff(): BelongsTo
    {
        return $this->belongsTo(FuelStationStaff::class, 'staff_id');
    }

    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }
}
