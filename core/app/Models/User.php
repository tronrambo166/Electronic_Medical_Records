<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
            'firstname' => 'string',
            'lastname' => 'string',
            'username' => 'string',
            'customer_unique_id' => 'integer',
            'email' => 'string',
            'country_code' => 'string',
            'mobile' => 'string',
            'balance' => 'double',
            'image' => 'string',
            'address' => 'object',
            'status' => 'integer',
            'kyc_status' => 'integer',
            'ev' => 'integer',
            'sv' => 'integer',
            'ver_code' => 'string',
            'email_verified_at' => 'datetime',
            'ver_code_send_at' => 'datetime',
            'ts' => 'integer',
            'tv' => 'integer',
            'tsc' => 'string',
            'password' => 'string',
            'remember_token' => 'string',
        ];

    protected $data = [
        'data'=>1
    ];

    // SCOPES

    public function getFullnameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function scopeActive()
    {
        return $this->where('status', 1);
    }

    public function scopeBanned()
    {
        return $this->where('status', 0);
    }

    public function scopeEmailUnverified()
    {
        return $this->where('ev', 0);
    }

    public function scopeSmsUnverified()
    {
        return $this->where('sv', 0);
    }
    public function scopeEmailVerified()
    {
        return $this->where('ev', 1);
    }

    public function scopeSmsVerified()
    {
        return $this->where('sv', 1);
    }
    public function scopeKycVerified()
    {
        return $this->where('sv', 1);
    }
    public function scopeKycUnVerified()
    {
        return $this->where('kyc_status', 0);
    }
    public function wallets()
    {
        return $this->hasMany(Wallet::class,'user_id')->where('user_type','USER')->whereHas('currency',function($q){
            $q->where('status',1);
        });
    }

    public function scopeisKyc($filter, $status = null){
        $query = $this->where('kyc_info','!=',null);
        if ($status) {
            $query = $query->where('kyc_status',$status);
        }
        return $query;
    }
}
