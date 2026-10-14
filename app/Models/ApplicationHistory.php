<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationHistory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'application_id',
        'status',
        'note',
        'changed_at',
    ];

    protected function casts(): array
    {
        return [
            'changed_at' => 'datetime',
        ];
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}