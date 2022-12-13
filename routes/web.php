<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipesContoller;
use App\Http\Controllers\GroupesController;
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

Route::resource("/",EquipesContoller::class);
Auth::routes();
Route::resource("/home",EquipesContoller::class);
Route::resource("/equipes",EquipesContoller::class);



