<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AjustesController extends BaseController
{

    public function perfilNegocio()
    {
        return view('administrador.configuracion.perfil-negocio');
    }
    public function apariencia()
    {
        return view('administrador.configuracion.apariencia');
    }
    public function categorias()
    {
        return view('administrador.configuracion.categorias');
    }

    public function comunicados()
    {
        return view('administrador.centro-informacion.centro-informacion');
    }
    public function altaComunicado()
    {
        return view('administrador.centro-informacion.comunicado-alta');
    }
    public function editarComunicado()
    {
        return view('administrador.centro-informacion.comunicado-editar');
    }

    public function sucursalesListado()
    {
        return view('administrador.configuracion.sucursales');
    }
    public function sucursalNueva()
    {
        return view('administrador.configuracion.sucursal-nueva');
    }
    public function sucursalEditar()
    {
        return view('administrador.configuracion.sucursal-editar');
    }

    
    public function planesListado()
    {
        return view('administrador.configuracion.planes-listado');
    }
    public function planesNuevo()
    {
        return view('administrador.configuracion.planes-alta');
    }
    public function planesEditar()
    {
        return view('administrador.configuracion.planes-editar');
    }
}

