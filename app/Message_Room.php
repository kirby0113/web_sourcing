<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message_Room extends Model
{
    //
    protected $table = "message_rooms";
    protected $primaryKey = 'Room_id';

    
    public function work(){
        return $this->belongsTo(Work::class,'work_id');
    }

}
