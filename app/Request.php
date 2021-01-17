<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $primaryKey = 'Request_id';
    protected $table = "requests";
}
