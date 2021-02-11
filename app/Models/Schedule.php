<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'week_day',
        'start',
        'end',
    ];

    public function supplies()
    {
        return $this->belongsToMany(Supply::class);
    }
}
