<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SubController;

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

Route::get('/message', [TestController::class, 'index']);

Route::get('/admin', [TestController::class, 'view']);
Route::post('/subcreate',[TestController::class,'createSubadmin']);


Route::get('/subadmin', [SubController::class, 'viewUser']);
Route::post('/usercreate', [SubController::class, 'createUser']);
