<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FirstController;
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

Route::get('/', [FirstController::class,'produtos']);
Route::get('/produtos', [FirstController::class,'produtosView']);
Route::get('/produtos/view_params', [FirstController::class,'produtosViewParams']);
Route::get('/produtos/info/{index?}', [FirstController::class,'produtosInfo'])->name('produtosInfo');
Route::resource('/clientes', ClienteController::class);