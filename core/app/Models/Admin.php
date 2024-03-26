<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends  Authenticatable
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'name' => 'string',
        'username' => 'string',
        'email' => 'string',
        'mobile' => 'string',
        'image' => 'string',
        'address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'status' => 'integer',

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
