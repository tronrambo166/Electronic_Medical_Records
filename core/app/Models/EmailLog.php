<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailLog extends Model
{
    use HasFactory;
    protected $casts = [
        'user_id' => 'integer',
        'mail_sender' => 'string',
        'email_from' => 'string',
        'email_to' => 'string',
        'subject' => 'string',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
