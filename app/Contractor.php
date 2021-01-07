<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifiEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Work;

class Contractor extends Authenticatable
{
    //
    use Notifiable;
    //protected $fillable = [
   //     'Name','Nickname','Birthday','email','photo_url','category_id','Appealpoint','password',
    //];
      protected $fillable = ['contractors'];

    protected $hidden = [
        'password','remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $primaryKey = 'Contractor_id';

    public function Work(){
        return $this->hasMany(Work::class);
    }

    public function getAppealpointAttribute($value){
        return str_replace(array("\r\n", "\r", "\n"), "\n", $value);
    }

    public static function AppealpointExplode($value){
        return explode("\n",$value);
    }

}
