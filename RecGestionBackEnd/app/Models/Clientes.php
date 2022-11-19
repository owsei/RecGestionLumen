<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Clientes extends Model
{
    
    
    function getAllClientes(){

        $DB= new UtilsDB();
        $sql="SELECT * FROM pruebas.clientes";
        $results=$DB->select($sql);
        
        return  $results;

    }
}
