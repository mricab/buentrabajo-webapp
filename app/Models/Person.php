<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'first_last_name',
        'second_last_name',
        'avatar',
        'birth_date',
        'age',
        'id_num',
        'id_type',
        'phone',
        'address',
        'address_latitude',
        'address_longitute',
        'city_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function supplier()
    {
        return $this->morphOne(Supplier::class, 'supplierable');
    }
}
