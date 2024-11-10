<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'last_job',
        'avatar',
        'email',
        'phone',
        'mobile',
        'birthday',
        'github',
        'linkedin',
        'website',
        'address',
        'bio'
    ];

    protected $table = 'profiles';
}