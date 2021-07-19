<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Seeders extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'seeder';

    protected $fillable = [
        'id',
        'seeder_id',
        'name',
        'email',
        'company_name',
        'linked_account',
        'website',
        'position',
        'office_num',
        'phone_num',
        'address',
        'rights',
        'status',
        'profile_pic',
        'profile_pic_url',
        'approved_at',
        'email_verified_at',
        'password',
        'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
