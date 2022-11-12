<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UtilsDB extends Model
{
    function select($sql){
        $results = app('db')->select($sql);
        return  $results;
    }
}
