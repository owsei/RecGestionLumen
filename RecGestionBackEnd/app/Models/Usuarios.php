<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Usuarios extends Model
{
    function doLogin($nombre,$contraseña){

        $DB= new UtilsDB();
        $sql="SELECT count(*) as existe FROM pruebas.usuarios where nombre ='$nombre'";
        $results=$DB->select($sql);
        
        // $results = app('db')->select("SELECT count(*) as existe FROM pruebas.usuarios where nombre ='$nombre'");
        
        // foreach ($results as $user) {
        //     //echo $user->existe;
        // }
        $dato=0;
        $array_num = count($results);
        for ($i = 0; $i < $array_num; ++$i){
            $dato=$results[$i]->existe;
        }
        return  $dato;
    }
}
