<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contractor;
class Request extends Model
{
    //
    protected $primaryKey = 'Request_id';
    protected $table = "requests";


    public function contractor(){
        return $this->belongsTo(Contractor::class,'contractor_id');
    }

    public function getContentsAttribute($value){
        $value = str_replace(array("\r\n", "\r", "\n"), "\n", $value);
        return nl2br($value);
    }

    public static function ContentsExplode($value){
        return explode("\n",$value);
    }
}
