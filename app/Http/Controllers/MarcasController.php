<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MarcasController extends BaseController
{

    public function marcasListado()
    {
        return view('administrador.marcas.listado');
    }
     public function marcasInactivas()
    {
        return view('administrador.marcas.inactivas-listado');
    }
     public function marcasPendientes()
    {
        return view('administrador.marcas.pendientes-listado');
    }
     public function marcaPerfil()
    {
        return view('administrador.marcas.perfil-marca');
    }
}
