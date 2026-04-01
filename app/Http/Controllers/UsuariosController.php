<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UsuariosController extends BaseController
{

    public function rolesUsuario()
    {
        return view('administrador.accesos-usuarios.roles');
    }
    public function usuariosAdministradores()
    {
        return view('administrador.accesos-usuarios.usuarios-administradores-listado');
    }
    public function usuariosAliados()
    {
        return view('administrador.accesos-usuarios.usuarios-aliados-listado');
    }
    public function usuarioEditar()
    {
        return view('administrador.accesos-usuarios.usuario-detalle');
    }
}
