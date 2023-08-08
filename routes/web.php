<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterSchoolController;

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
    return view('main');
});

//Route::get('registerSchool',[RegisterSchoolController::class,'school'])->name('registerSchool');
Route::get('school',[RegisterSchoolController::class,'registerSchool'])->name('registerSchool');
Route::get('registerKindergarten',[RegisterSchoolController::class,'registerKindergarten'])->name('registerKindergarten');
Route::get('workRegister',[RegisterSchoolController::class,'workRegister'])->name('workRegister');

//Route::post('web/school/register',[RegisterSchoolController::class,'storeRegisterSchool'])->name('addInfoSchool');

