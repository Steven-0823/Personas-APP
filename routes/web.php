<?php
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PaisController;

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
Route::get('/Comunas',[ComunaController::class,'index']) ->name('comuna.index');
Route::post('/Comunas',[ComunaController::class,'store']) ->name('comuna.store');
Route::get('/Comunas/create',[ComunaController::class,'create']) ->name('comuna.create');
Route::delete('/Comunas/{comuna}',[ComunaController::class,'destroy']) ->name('comuna.destroy');
Route::put('/Comunas/{comuna}',[ComunaController::class,'update']) ->name('comuna.update');
Route::get('/Comunas/{comuna}/edit',[ComunaController::class,'edit']) ->name('comuna.edit');


Route::get('/Municipio',[MunicipioController::class,'index']) ->name('municipio.index');
Route::post('/Municipio',[MunicipioController::class,'store']) ->name('municipio.store');
Route::get('/Municipio/create',[MunicipioController::class,'create']) ->name('municipio.create');
Route::delete('/Municipio/{municipio}',[MunicipioController::class,'destroy']) ->name('municipio.destroy');
Route::put('/Municipio/{municipio}',[MunicipioController::class,'update']) ->name('municipio.update');
Route::get('/Municipio/{municipio}/edit',[MunicipioController::class,'edit']) ->name('municipio.edit');


Route::get('/Departamentos',[DepartamentoController::class,'index']) ->name('departamento.index');
Route::post('/Departamentos',[DepartamentoController::class,'store']) ->name('departamento.store');
Route::get('/Departamentos/create',[DepartamentoController::class,'create']) ->name('departamento.create');
Route::delete('/Departamentos/{departamento}',[DepartamentoController::class,'destroy']) ->name('departamento.destroy');
Route::put('/Departamentos/{departamento}',[DepartamentoController::class,'update']) ->name('departamento.update');
Route::get('/Departamentos/{departamento}/edit',[DepartamentoController::class,'edit']) ->name('departamento.edit');



Route::get('/Pais',[PaisController::class,'index']) ->name('pais.index');
Route::post('/Pais',[PaisController::class,'store']) ->name('pais.store');
Route::get('/Pais/create',[PaisController::class,'create']) ->name('pais.create');
Route::delete('/Pais/{pais}', [PaisController::class, 'destroy'])->name('paises.destroy');
Route::put('/Pais/{pais}',[PaisController::class,'update']) ->name('paises.update');
Route::get('/Pais/{pais}/edit', [PaisController::class, 'edit'])->name('paises.edit');
