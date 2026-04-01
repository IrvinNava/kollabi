<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\AjustesController;
use App\Http\Controllers\AgendaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/crear-cuenta', [AdminController::class, 'signUp']);
Route::get('/admin/sesion-finalizada', [AdminController::class, 'signOut']);
Route::get('/admin/recuperar-cuenta', [AdminController::class, 'forgotPassword']);
Route::get('/admin/resetear-contrasena', [AdminController::class, 'resetPassword']);
Route::get('/admin/perfil', [AdminController::class, 'profile']);


Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

// Operación
Route::get('/admin/marcas', [MarcasController::class, 'marcasListado']);
Route::get('/admin/marcas/inactivas', [MarcasController::class, 'marcasInactivas']);
Route::get('/admin/marcas/pendientes', [MarcasController::class, 'marcasPendientes']);
Route::get('/admin/marcas/perfil', [MarcasController::class, 'marcaPerfil']);

Route::get('/admin/agenda', [AgendaController::class, 'agenda']);


// Accesos y Usuarios
Route::get('/admin/usuarios', [UsuariosController::class, 'usuariosAdministradores']);
Route::get('/admin/usuarios/aliados', [UsuariosController::class, 'usuariosAliados']);
Route::get('/admin/usuarios-editar', [UsuariosController::class, 'usuarioEditar']);
Route::get('/admin/roles', [UsuariosController::class, 'rolesUsuario']);

// Ajustes y configuración
Route::get('/admin/configuracion/perfil-del-negocio', [AjustesController::class, 'perfilNegocio']);
Route::get('/admin/configuracion/apariencia', [AjustesController::class, 'apariencia']);

Route::get('/admin/configuracion/sucursales', [AjustesController::class, 'sucursalesListado']);
Route::get('/admin/configuracion/sucursales/nueva', [AjustesController::class, 'sucursalNueva']);
Route::get('/admin/configuracion/sucursales/editar', [AjustesController::class, 'sucursalEditar']);

Route::get('/admin/configuracion/categorias', [AjustesController::class, 'categorias']);

Route::get('/admin/configuracion/centro-informacion', [AjustesController::class, 'comunicados']);
Route::get('/admin/configuracion/centro-informacion/nuevo', [AjustesController::class, 'altaComunicado']);
Route::get('/admin/configuracion/centro-informacion/editar', [AjustesController::class, 'editarComunicado']);


Route::get('/admin/configuracion/planes', [AjustesController::class, 'planesListado']);
Route::get('/admin/configuracion/planes/nuevo', [AjustesController::class, 'planesNuevo']);
Route::get('/admin/configuracion/planes/editar', [AjustesController::class, 'planesEditar']);