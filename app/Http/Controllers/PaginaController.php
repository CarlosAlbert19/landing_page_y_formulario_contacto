<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contacts($registro_id = null)
    {
        if ($registro_id == '1234'){

            $nombre = 'Charlie';
            $correo = 'CharlieBrown@hotmail.com';
            
        }else{
            $nombre = null;
            $correo = null;
        }
    
        return view('contacto', compact('nombre', 'correo'));
    }

    public function recibeFormContacto(Request $request)
    {
        $request->validate([
            'nombre'=>'required|max:255|min:3',
            'correo'=>['required', 'email'],
            'comentario'=>'required',
        ]);
        
        //dd($request->all());
        // dd($request->input('nombre'));
        // dd($request->input('correo'));
        // dd($request->input('comentario'));
    }

    public function pagina_de_caida()
    {
        return view('landingpage');
    }
}
