<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rusunawa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
    ];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function facilities()
    {
        return $this->hasMany(RusunawaFacility::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}