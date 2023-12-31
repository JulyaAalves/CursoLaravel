<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrevisionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
route::get('prevision-todos',[PrevisionController::class, 'index']);
route::post('prevision-salvar',[PrevisionController::class,'store']);
route::get('prevision-show/{id}',[PrevisionController::class,'show']);
route::put('prevision-update/{id}',[PrevisionController::class,'update']);
route::delete('prevision-destroy/{id}',[PrevisionController::class,'destroy']);


route::resource('prevision',PrevisionController::class,);