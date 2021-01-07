<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'Category_id';

    //public function hasMany(){
    //    return $this->hasMany(Work::class);
    //}
}
