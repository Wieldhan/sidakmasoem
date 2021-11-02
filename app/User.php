<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table   	= 'user';
    protected $fillable = [
        'id','nama_lengkap','email','level','password','remember_token','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function karyawan()
    {
        return $this->hasOne(Karyawan::class);
    }

    public function sk()
    {
        return $this->belongsToMany(Sk::class);
    }

    public function forum()
    {
        return $this->belongsToMany(Sk::class);
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
