<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterSchoolController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('web/school/register',[RegisterSchoolController::class,'storeRegisterSchool'])->name('addInfoSchool');
Route::post('web/kindergarten/register',[RegisterSchoolController::class,'storeRegisterKindergarten'])->name('addInfoKindergarten');
Route::post('web/school/work_register',[RegisterSchoolController::class,'storeRegisterWork'])->name('addInfoWork');
