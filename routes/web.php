<?php


use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::resource('empleados', EmpleadoController::class);
Route::resource('empleados', EmpleadoController::class);

/*Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');

Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');


Route::post('/emeplados', [EmpleadoController::class, 'store'])->name('empleados.store');

Route::get('/empleados/{empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');

Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');


Route::put('/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');

Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');*/

