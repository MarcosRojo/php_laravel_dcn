<?php

use App\Http\Controllers\DisponibilidadesExistenciasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ModelosController;
use App\Http\Controllers\RegistroDisponibilidadExistenciaController;
use App\Http\Controllers\VenezuelaController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', [HomeController::class, 'index'])->name("page.home");

#rutas para la pagina de marcas, donde se hace render de la pagina y se hace le crud de la misma
Route::prefix("marcas")->controller(MarcasController::class)->group( function(){
    Route::get('/', 'index')->name("page.marcas"); #render pagina
    Route::get('/show', 'show'); # listado de marcas
    Route::post('/create', 'create');
});

#rutas con la finalidad de registrar un nuevo producto
Route::prefix("productos")->controller(ProductosController::class)->group( function(){
    Route::get('/', 'index')->name("page.productos"); #render pagina
    Route::get('/show', 'show'); # listado de productos
    Route::post('/create', 'create');
    Route::get('/store/{producto_id}', 'store');
    Route::post('update' , 'update' );
});

#rutas de manejo de los modelos de las marcas
Route::prefix("modelos")->controller(ModelosController::class)->group( function(){
    Route::get('/{marca_id}', 'modelos'); # listado de Modelos
});

#rutas de manejo para ingreso y consulta de existencia y disponibilidad del productos
Route::prefix("disponibilidad_existencia")->controller(DisponibilidadesExistenciasController::class)->group( function(){
    Route::get('/', 'index')->name("page.disponibilidad_existencia"); # vista de disponibilidad y existencia de productos
    Route::get('/show', 'show'); # Route para mostrar el listado de disponibilidad y existencia de productos
});

#rutas de manejo para ingreso  de existencia y disponibilidad del productos
Route::prefix("registro_disponibilidad_existencia")->controller(RegistroDisponibilidadExistenciaController::class)->group( function(){
    Route::get('/', 'index')->name("page.disponibilidad_existencia"); # vista de registro  existencia de productos
});

#rutas para obtener la informacion de los estados de venezuela
Route::prefix("venezuela")->controller(VenezuelaController::class)->group( function(){
    Route::get('/estados','estados'); #ruta para inforamcion de todos los estados de venezuela
    Route::get('/municipios/{estado_id}','municipios'); #ruta para la recuperacion de la informacion de los municipios de venezuela
    Route::get('/parroquias/{municipio_id}','parroquias'); #ruta para la recuperacion de la informacion de las parroquias asiganadas a el parametro recibido por ruta
});

