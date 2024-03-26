<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    protected $guarded = [];

    protected $table = "frontends";
    protected $casts = [
        'data_keys' => 'string',
        'data_values' => 'object',
        'view' => 'integer',
    ];

    public static function scopeGetContent($data_keys)
    {
        return Frontend::where('data_keys', $data_keys);
    }
}
