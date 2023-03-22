<?php

use Illuminate\Support\Facades\Route;

//import namespace for Controller
use App\Http\Controllers\SuperherosController;

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
})-> name('welcome');

Route::get('/heros', [SuperherosController::class,'index']) -> name('heros');
Route::get('/heros_women',[SuperherosController::class, 'index_women']) -> name('heros_women');
Route::get('/heros_men',[SuperherosController::class, 'index_men']) -> name('heros_men');