<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'center_latitude',
        'center_longitude',
        'max_radius',
    ];

    public function people()
    {
        return $this->hasMany(Person::class);
    }
}
