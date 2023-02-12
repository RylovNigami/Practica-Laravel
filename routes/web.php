<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\BatidoController;

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

Route::get('/',[FrutaController::class, 'index'])->name('frutas.list');
Route::get('/frutas',[FrutaController::class, 'create'])->name('frutas.frutacreate');
Route::post('/frutas',[FrutaController::class, 'store'])->name('frutas.frutastore');
Route::get('/frutas/{id}',[FrutaController::class, 'edit'])->name('frutas.frutaedit');
Route::post('/frutas/{id}',[FrutaController::class, 'update'])->name('frutas.frutaupdate');
Route::get('/frutas/show/{id}',[FrutaController::class, 'show'])->name('frutas.frutasshow');
Route::delete('/frutas/{id}',[FrutaController::class, 'destroy'])->name('frutas.frutadestroy');

Route::get('/proveedoreslist',[ProveedorController::class, 'index'])->name('proveedores.list');
Route::get('/proveedores',[ProveedorController::class, 'create'])->name('proveedores.proveedorcreate');
Route::post('/proveedores',[ProveedorController::class, 'store'])->name('proveedores.proveedorstore');
Route::get('/proveedores/{id}',[ProveedorController::class, 'edit'])->name('proveedores.proveedoredit');
Route::post('/proveedores/{id}',[ProveedorController::class, 'update'])->name('proveedores.proveedorupdate');
Route::get('/proveedores/show/{id}',[ProveedorController::class, 'show'])->name('proveedores.proveedoresshow');
Route::delete('/proveedores/{id}',[ProveedorController::class, 'destroy'])->name('proveedores.proveedordestroy');

Route::get('/batidoslist',[BatidoController::class, 'index'])->name('batidos.list');
Route::get('/batidos',[BatidoController::class, 'create'])->name('batidos.batidocreate');
Route::post('/batidos',[BatidoController::class, 'store'])->name('batidos.batidostore');
Route::get('/batidos/{id}',[BatidoController::class, 'edit'])->name('batidos.batidoedit');
Route::post('/batidos/{id}',[BatidoController::class, 'update'])->name('batidos.batidoupdate');
Route::get('/batidos/show/{id}',[BatidoController::class, 'show'])->name('batidos.batidosshow');
Route::delete('/batidos/{id}',[BatidoController::class, 'destroy'])->name('batidos.batidodestroy');
