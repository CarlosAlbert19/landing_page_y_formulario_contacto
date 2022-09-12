<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contacts($registro_id = null)
    {
        if (!empty($registro_id)){

            $nombre = 'Charlie';
            $correo = 'CharlieBrown@hotmail.com';
            
        }else{
            $nombre = null;
            $correo = null;
        }
    
        return view('contacto', compact('nombre', 'correo'));
    }

    public function pagina_de_caida()
    {
        return view('landingpage');
    }
}
