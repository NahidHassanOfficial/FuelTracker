<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FuelPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'station_id',
        'fuel_type_id',
        'price',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
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
