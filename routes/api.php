<?php

use App\Http\Controllers\Apl\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('student',[studentController::class,'index'])->name('student-index');
Route::post('student',[studentController::class,'store'])->name('student-store');
Route::get('student/{id}',[studentController::class,'search'])->name('student-search');
Route::delete('student/{id}',[studentController::class,'delete'])->name('student-delete');
