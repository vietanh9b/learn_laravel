<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\User;
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

//list
Route::get('/', [EmployeeController::class,'index']);
//create
Route::get('/create', [EmployeeController::class,'create']);
//post
Route::post('/product', [EmployeeController::class,'store']);
Route::prefix('/employee')->group(function () {
    //create
    Route::get('/create', [EmployeeController::class,'create']);
    //post
    Route::post('/store', [EmployeeController::class,'store']);
    //edit
    Route::get('/edit/{employee}', [EmployeeController::class,'edit']);
    Route::put('/edit/storeEdit', [EmployeeController::class,'storeEdit']);
});
