<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class VentasController extends BaseController
{

    public function nueva()
    {
        return view('administrador.ventas.nueva');
    }

    public function listadoVentas()
    {
        return view('administrador.ventas.listado');
    }
}
