<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Manufacture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'car_id'
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
