<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddListing extends Model
{
    use HasFactory;
    protected $table = "add_listings";
    protected $guarded = [];
    protected $casts = [
        'project_details' => 'object',

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
