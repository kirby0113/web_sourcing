<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $primaryKey = 'Message_id';
    protected $table = 'messages';

    public function contractor(){
        return $this->belongsTo(Contractor::class,'contractor_id');
    }

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }

    public function Work(){
        return $this->belongsTo(Message_Room::class,'room_id');
    }

    
    public function getMessageAttribute($value){
        $value = str_replace(array("\r\n", "\r", "\n"), "\n", $value);
        return nl2br($value);
    }

}
