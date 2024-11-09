<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'website',
        'github',
        'linkedin',
        'twitter',
        'bio',
        'avatar',
    ];

    protected $table = 'profiles';
}
