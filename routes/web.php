<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SucursalesController;

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

Route::get('ventas/{id}/pdf', [VentaController::class, 'pdf'])->name('ventas.pdf');


Route::get('/', function () {
   
    return redirect('/front');
    
});
Route::resource('/login', UserController::class);
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/identificacion', [UserController::class,'verificalogin'])->name('identificacion');
Route::get('/home', [HomeController::class,'index'])->name('home');

Route::resource('/categoria', CategoriaController::class);

Route::get('cancelar', function () {
 return redirect()->route('categoria.index')->with('datos','Acción Cancelada ..!');
})->name('cancelar');
Route::get('categoria/{id}/confirmar',[CategoriaController::class,'confirmar'])->name('categoria.confirmar');
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::resource('/unidad', UnidadController::class);

Route::get('cancelar', function () {
    return redirect()->route('unidad.index')->with('datos','Acción Cancelada ..!');
   })->name('cancelar');
   Route::get('unidad',[UnidadController::class,'index'])->name('unidad.index');
   Route::get('unidad/{id}/confirmar',[UnidadController::class,'confirmar'])->name('unidad.confirmar');
   Route::get('cancelar_prod', function () {
    return redirect()->route('productos.index')->with('datos', 'Acción Cancelada ..!');
})->name('cancelar_prod');


Route::get('productos/{id}/confirmar', [ProductosController::class, 'confirmar'])->name('productos.confirmar');
Route::resource('/productos', ProductosController::class);
Route::resource('/ventas', VentaController::class);
Route::get('/EncontrarProducto/{idproducto}', [VentaController::class,'ProductoCodigo']);
Route::get('/EncontrarTipo/{tipo_id}', [VentaController::class,'PorTipo']);

Route::get('/front', [FrontController::class, 'index'])->name('front');
Route::get('/front/{id}/detalle', [FrontController::class, 'detalle'])->name('front.detalle');
Route::resource('/front', FrontController::class);
Route::get('sucursales/{id}/confirmar', [SucursalesController::class, 'confirmar'])->name('sucursales.confirmar');
Route::resource('/sucursales', SucursalesController::class);
Route::get('/sucursales', [SucursalesController::class, 'index'])->name('sucursales.index');

Route::get('cancelar_suc', function () {
    return redirect()->route('sucursales.index')->with('datos', 'Acción Cancelada ..!');
})->name('cancelar_suc');

