<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ProductoDetalleController;
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



Route::get('/', function () {
   
    return redirect('/user/home');
    
});

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/identificacion', [UserController::class,'verificalogin'])->name('identificacion');
Route::get('/admin/salir', [UserController::class,'salir'])->name('salir');

Route::middleware(['checkRole:0'])->group(function () {
Route::get('/admin/home', [HomeController::class,'index'])->name('admin.home');
Route::resource('/admin/categoria', CategoriaController::class);
Route::get('cancelar', function () {
 return redirect()->route('categoria.index')->with('datos','Acción Cancelada ..!');
})->name('cancelar');
Route::get('/admin/categoria/{id}/confirmar',[CategoriaController::class,'confirmar'])->name('categoria.confirmar');
Route::get('/admin/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::resource('/admin/unidad', UnidadController::class);
Route::get('cancelar', function () {
    return redirect()->route('unidad.index')->with('datos','Acción Cancelada ..!');
   })->name('cancelar');
   Route::get('/admin/unidad',[UnidadController::class,'index'])->name('unidad.index');
   Route::get('/admin/unidad/{id}/confirmar',[UnidadController::class,'confirmar'])->name('unidad.confirmar');
   Route::get('cancelar_prod', function () {
    return redirect()->route('productos.index')->with('datos', 'Acción Cancelada ..!');
})->name('cancelar_prod');
Route::get('/admin/productos/{id}/confirmar', [ProductosController::class, 'confirmar'])->name('productos.confirmar');
Route::resource('/admin/productos', ProductosController::class);
Route::resource('/admin/ventas', VentaController::class);
Route::get('/admin/EncontrarProducto/{idproducto}', [VentaController::class,'ProductoCodigo']);
Route::get('/admin/EncontrarTipo/{tipo_id}', [VentaController::class,'PorTipo']);
Route::get('/admin/sucursales/{id}/confirmar', [SucursalesController::class, 'confirmar'])->name('sucursales.confirmar');
Route::resource('/admin/sucursales', SucursalesController::class);
Route::get('/admin/sucursales', [SucursalesController::class, 'index'])->name('sucursales.index');
Route::get('cancelar_suc', function () {
    return redirect()->route('sucursales.index')->with('datos', 'Acción Cancelada ..!');
})->name('cancelar_suc');
Route::get('/ventas/{id}/pdf', [VentaController::class, 'pdf'])->name('ventas.pdf');
Route::get('cancelar_venta', function () {
    return redirect()->route('venta.index')->with('datos', 'Acción Cancelada ..!');
})->name('cancelar_venta');










    Route::get('/admin/productos/detalle/{idproducto}/create', [ProductoDetalleController::class, 'create'])->name('detalles.create');
    // Puedes agregar más rutas según sea necesario para el controlador ProductoDetalleController
    Route::post('/productos/detalle/store', [ProductoDetalleController::class, 'store'])->name('detalleproducto.store');

    Route::resource('/admin/productos/detalle', ProductoDetalleController::class);
Route::match(['get', 'post'], '/admin/productos/detalle/{id}/edit', [ProductoDetalleController::class, 'edit'])->name('detalles.edit');
Route::match(['get', 'post'], '/admin/productos/detalle/{id}/update', [ProductoDetalleController::class, 'update'])->name('detalles.update');
    


});

Route::get('/user/front/modelos', [FrontController::class, 'modelos'])->name('front.modelos');
Route::get('/user/home', [FrontController::class, 'index'])->name('user.home');
Route::get('/user/front/{id}/detalle', [FrontController::class, 'detalle'])->name('user.detalle');
Route::resource('/front', FrontController::class);



Route::get('/register', [UserController::class, 'showRegister'])->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('register');

