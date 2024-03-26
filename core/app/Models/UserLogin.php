<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'user_id' => 'integer',
        'user_ip' => 'string',
        'city' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'longitude' => 'string',
        'latitude' => 'string',
        'browser' => 'string',
        'os' => 'string'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
