<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    
    public function doLogin(Request $request)
    {
        $nombre = $_GET['NO'];
        $contraseña = $_GET['PS'];
        $model= new Usuarios();
        return $model-> doLogin($nombre,$contraseña);
    }
}
