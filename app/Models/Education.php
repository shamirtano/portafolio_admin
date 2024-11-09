<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'degree',
        'title',
        'institution',
        'location',
        'finished',
        'start_date',
        'end_date',
        'description',
        'support',
    ];

    protected $dates = ['start_date', 'end_date'];

    public function getStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('M Y');
    }

    public function getEndDateAttribute($value)
    {
        return Carbon::parse($value)->format('M Y');
    }
}
