<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\AjustesController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\InventarioController;

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

Route::get('/login', [AuthenticationController::class, 'login']);
Route::get('/crear-cuenta', [AuthenticationController::class, 'signUp']);
Route::get('/recuperar-cuenta', [AuthenticationController::class, 'forgotPassword']);
Route::get('/resetear-contrasena', [AuthenticationController::class, 'resetPassword']);
Route::get('/app/sesion-finalizada', [AuthenticationController::class, 'signOut']);
Route::get('/app/perfil', [AdminController::class, 'profile']);

// Admin 
Route::get('/app/admin/dashboard', [AdminController::class, 'dashboard']);

// Admin Operación
Route::get('/app/admin/marcas', [MarcasController::class, 'marcasListado']);
Route::get('/app/admin/marcas/inactivas', [MarcasController::class, 'marcasInactivas']);
Route::get('/app/admin/marcas/pendientes', [MarcasController::class, 'marcasPendientes']);
Route::get('/app/admin/marcas/perfil', [MarcasController::class, 'marcaPerfil']);

Route::get('/app/admin/agenda', [AgendaController::class, 'agenda']);


// Admin Inventario 
Route::get('/app/admin/inventario', [InventarioController::class, 'inventarioListado']);
Route::get('/app/admin/inventario/apartados', [InventarioController::class, 'apartadosListado']);
Route::get('/app/admin/inventario/paquetes', [InventarioController::class, 'paquetesListado']);
Route::get('/app/admin/inventario/entradas', [InventarioController::class, 'entradasListado']);
Route::get('/app/admin/inventario/salidas', [InventarioController::class, 'salidasListado']);


// =====================================================
// VENDEDOR@S
// =====================================================

// Pos Ventas
Route::get('/app/pos/ventas', [VentasController::class, 'posVentasListado']);
Route::get('/app/pos/nueva-venta', [VentasController::class, 'nueva']);


// =====================================================
// ADMINISTRADOR - DUEÑ@S - SUPER-ADMIN
// =====================================================

//Admin Ventas
Route::get('/app/admin/ventas', [VentasController::class, 'adminVentasListado']);

// Admin Accesos y Usuarios
Route::get('/app/admin/usuarios', [UsuariosController::class, 'usuariosAdministradores']);
Route::get('/app/admin/usuarios/aliados', [UsuariosController::class, 'usuariosAliados']);
Route::get('/app/admin/usuarios-editar', [UsuariosController::class, 'usuarioEditar']);
Route::get('/app/admin/roles', [UsuariosController::class, 'rolesUsuario']);

// Admin  Ajustes y configuración
Route::get('/app/admin/configuracion/perfil-del-negocio', [AjustesController::class, 'perfilNegocio']);
Route::get('/app/admin/configuracion/apariencia', [AjustesController::class, 'apariencia']);

Route::get('/app/admin/configuracion/sucursales', [AjustesController::class, 'sucursalesListado']);
Route::get('/app/admin/configuracion/sucursales/nueva', [AjustesController::class, 'sucursalNueva']);
Route::get('/app/admin/configuracion/sucursales/editar', [AjustesController::class, 'sucursalEditar']);

Route::get('/app/admin/configuracion/categorias', [AjustesController::class, 'categorias']);

Route::get('/app/admin/configuracion/centro-informacion', [AjustesController::class, 'comunicados']);
Route::get('/app/admin/configuracion/centro-informacion/nuevo', [AjustesController::class, 'altaComunicado']);
Route::get('/app/admin/configuracion/centro-informacion/editar', [AjustesController::class, 'editarComunicado']);


Route::get('/app/admin/configuracion/planes', [AjustesController::class, 'planesListado']);
Route::get('/app/admin/configuracion/planes/nuevo', [AjustesController::class, 'planesNuevo']);
Route::get('/app/admin/configuracion/planes/editar', [AjustesController::class, 'planesEditar']);

// =====================================================
// MARCAS
// =====================================================