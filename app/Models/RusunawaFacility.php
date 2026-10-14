<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RusunawaFacility extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'rusunawa_id',
        'facility_id',
    ];

    public function rusunawa()
    {
        return $this->belongsTo(Rusunawa::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}