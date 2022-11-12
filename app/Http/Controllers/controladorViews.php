<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarAutores;
use App\Http\Requests\validarLibros;

class controladorViews extends Controller{

    public function controlBookRegister(validarLibros $req){
        return redirect('bookRegister')->with('validado','LibroRegistrado');
    }

    public function controlAutoresRegister(validarAutores $req){
        return redirect('autores')->with('validado','AutorRegistrado');
    }
}
