<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemoteVip extends Model
{
    use HasFactory;
    protected $table = "remote_vips";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
