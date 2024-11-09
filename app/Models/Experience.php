<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'type',
        'company',
        'location',
        'start_date',
        'is_current',
        'end_date',
        'description',
    ];

    protected $table = 'experiences';
}
