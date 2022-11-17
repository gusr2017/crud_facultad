<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web".
*/

//esta ruta la borro o desactivo y pongo el retorno de la vista (welcome) en el controlador (metodo index)
/*Route::get('/', function () {
    return view('welcome');
});
*/
//se relaciona la ruta con el controlador de la clase persona y el metodo index y la ruta de la vista (personas.index)
// se podira agregar la ruta en: '/' pero es mejor darle un nombre a la ruta
Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show'); //cuando quiero mostrar un solo registro
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');