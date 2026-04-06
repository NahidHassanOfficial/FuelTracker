<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Upazila extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'district_id',
        'name',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function division(): HasOneThrough
    {
        return $this->hasOneThrough(
            Division::class,
            District::class,
            'id',           // Foreign key on districts table
            'id',           // Foreign key on divisions table
            'district_id',  // Local key on upazilas table
            'division_id'   // Local key on districts table
        );
    }

    public function fuelStations(): HasMany
    {
        return $this->hasMany(FuelStation::class);
    }
}
