<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeuDiligenc extends Model
{
    use HasFactory;
    protected $table = "deu_diligencs";
    protected $guarded = [];

    protected $casts = [
        'verification_type' => 'array',
        'status' => 'integer'
    ];

    public function property()
    {
        return $this->belongsTo(AddListing::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
