<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'rusunawa_id',
        'unit_number',
        'floor',
        'area_m2',
        'bedrooms',
        'monthly_price',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'floor' => 'integer',
            'area_m2' => 'decimal:2',
            'bedrooms' => 'integer',
            'monthly_price' => 'decimal:2',
        ];
    }

    public function rusunawa()
    {
        return $this->belongsTo(Rusunawa::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}