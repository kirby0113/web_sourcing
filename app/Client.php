<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifiEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    //
    use Notifiable;
    protected $fillable = [
        'Name','NickName','Birthday','email','photo_url','password',
    ];

protected $hidden = [
    'password','remember_token',
];

protected $casts = [
    'email_verified_at' => 'datetime',
];

protected $primaryKey = 'Client_id';

}