<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rusunawa_id',
        'rating',
        'comment',
    ];

    protected function casts(): array
    {
        return [
            'rating' => 'decimal:1',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rusunawa()
    {
        return $this->belongsTo(Rusunawa::class);
    }
}