<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MidExamController;

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
    return view('dashboard');
});
Route::get('/index',[MidExamController::class,'index']);
Route::get('/add', [MidExamController::class, 'create']);
Route::post('/add', [MidExamController::class, 'store']);
Route::post('/destroy/{id}', [MidExamController::class,'destroy']);
Route::post('/edit/{id}', [MidExamController::class,'update']);
Route::put('/{id}', [MidExamController::class,'edit']);