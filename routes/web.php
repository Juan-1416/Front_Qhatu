<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
return view('index.index');
});

Route::get('/perfil_indigena', function () {
    return view('perfil_indigena.perfil_indigena');
});


Route::get('/registrar', function (){
    return view('registrar.registrar');
});

Route::get('/iniciarsesion',function(){
    return view('iniciarsesion.iniciarsesion');
});

Route::get('/carritoform1',function(){
    return view('carritocompra.carritoform1');
});
Route::get('/carritoform2',function(){
    return view('carritocompra.carritoform2');
});
Route::get('/carritoform3',function(){
    return view('carritocompra.carritoform3');
});

Route::get('/carritoform4',function(){
    return view('carritocompra.carritoform4');
});

Route::get('/detalle_producto',function(){
    return view('detalle_producto.detalle_producto');
});

Route::get('/subir_compra',function(){
    return view('subir_compra.subir_compra');
});
