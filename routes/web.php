<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamisaController;
use App\Models\Camisa;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'camisas', 'as' => 'camisas.'], function () {
    Route::get('/', [CamisaController::class, 'index'])->name('index');
    Route::post('/', [CamisaController::class, 'store'])->name('store');
    Route::get('/list', [CamisaController::class, 'list'])->name('list');
    Route::get('/{id}', [CamisaController::class, 'show'])->name('show');
    Route::post('/{id}', [CamisaController::class, 'update'])->name('update');
    Route::delete('/{id}', [CamisaController::class, 'delete'])->name('delete');
});

