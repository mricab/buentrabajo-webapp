<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'service_id',
        'description',
        'price',
        'approval_date',
    ];

    public function supplier()
    {
        return $this->belongTo(Supplier::class);
    }

    public function service()
    {
        return $this->belongTo(Service::class);
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class);
    }
}
