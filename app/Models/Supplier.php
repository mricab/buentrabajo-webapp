<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'category_id',
        'experience',
        'request_state',
        'request_approval_date',
        'availability_state',
        'score_sum',
        'score_count',
    ];

    public function supplierable()
    {
        return $this->morphTo();
    }

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }
}
