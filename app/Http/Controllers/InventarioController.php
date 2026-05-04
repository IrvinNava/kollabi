<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class InventarioController extends BaseController
{

    public function inventarioListado()
    {
        return view('administrador.inventario.listado');
    }
    public function apartadosListado()
    {
        return view('administrador.inventario.apartados-listado');
    }
    public function paquetesListado()
    {
        return view('administrador.inventario.paquetes-listado');
    }

}