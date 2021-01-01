<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $primaryKey = 'Work_id';
    protected $table = "works";

    public static function category_pickup($id){
        return Work::where('Category_id',$id)->paginate(10);
    }       
    
    public static function word_pickup($words){
        $query = Work::query();
        foreach($words as $word){
            $query->orwhere('Title','like','%'.$word.'%');
            $query->orwhere('Contents','like','%'.$word.'%');
        }
        return $query->paginate(10);
    }
    
}
