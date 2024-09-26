<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\TestController;
use App\Http\Controllers\SubController;

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
});


Route::get('/admin', [TestController::class, 'view']);
Route::post('/subcreate',[TestController::class,'createSubadmin']);

Route::get('/subadmin', [SubController::class, 'viewUser']);
Route::get('/usercreate', [SubController::class, 'createUser']);