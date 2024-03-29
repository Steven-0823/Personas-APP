<?php
use App\Http\Controllers\ComunaController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Comunas',[ComunaController::class,'index']) ->name('comuna.index');
Route::post('/Comunas',[ComunaController::class,'store']) ->name('comuna.store');

Route::get('/Comunas/create',[ComunaController::class,'create']) ->name('comuna.create');
Route::delete('/Comunas/{comuna}',[ComunaController::class,'destroy']) ->name('comuna.destroy');
Route::put('/Comunas/{comuna}',[ComunaController::class,'update']) ->name('comuna.update');
Route::get('/Comunas/{comuna}/edit',[ComunaController::class,'edit']) ->name('comuna.edit');
