<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FuelStationStaff extends Model
{
    use HasFactory;
    protected $table = 'fuel_station_staffs';

    protected $fillable = [
        'station_id',
        'name',
        'phone',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'status'   => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function station(): BelongsTo
    {
        return $this->belongsTo(FuelStation::class, 'station_id');
    }

    public function sellRecords(): HasMany
    {
        return $this->hasMany(FuelSellRecord::class, 'staff_id');
    }
}
