<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contractor;

class Work extends Model
{
    //
    protected $primaryKey = 'Work_id';
    protected $table = "works";

    public static function category_pickup($id){
        return Work::where('Category_id',$id)->where('finished',false)->orderBy('created_at','desc')->paginate(10);
    }       
    
    public static function word_pickup($words){
        $query = Work::query();
        foreach($words as $word){
            $query->orwhere('Title','like','%'.$word.'%');
            $query->orwhere('Contents','like','%'.$word.'%');
        }
        $query->where('finished',false)->orderBy('created_at','desc');
        return $query->paginate(10);
    }


    public function client(){
        return $this->belongsTo(Client::class,'Client_id');
    }

    public function getContentsAttribute($value){
        return str_replace(array("\r\n", "\r", "\n"), "\n", $value);
    }

    public static function ContentsExplode($value){
        return explode("\n",$value);
    }

    public static function getWork_Client($id){
        return Work::where('Client_id',$id)->orderBy('created_at','desc')->get();
    }

    public function category(){
        return $this->belongsTo(Category::class,'Category_id');
    }
    
}
