<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $primaryKey = 'Work_id';
    protected $table = "works";

    public static function category_pickup($id){
        return Work::where('Category_id',$id)->get();
    }       
    
}
