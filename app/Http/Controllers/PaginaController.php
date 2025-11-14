<?php

namespace App\Http\Controllers;

use Exception;

class PaginaController extends Controller
{
    /**
     * Mostrar la vista de bienvenida.
     *
     * @return \Illuminate\View\View
     */
    public function bienvenida()
    {
        return view('bienvenida');
    }

    /**
     * Mostrar la vista de saludo con el nombre proporcionado.
     *
     * @param  string  $nombre
     * @return \Illuminate\View\View
     */
    public function saludo($nombre)
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
