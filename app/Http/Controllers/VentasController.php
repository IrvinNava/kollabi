<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class VentasController extends BaseController
{

    // =====================================================
    // VENDEDOR
    // =====================================================

    public function nueva()
    {
        return view('administrador.ventas.nueva');
    }

    public function posVentasListado()
    {
        return view('pos.ventas.listado');
    }


    // =====================================================
    // ADMINISTRADOR
    // =====================================================

    public function adminVentasListado()
    {
        return view('administrador.ventas.listado');
    }
}
