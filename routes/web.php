<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SlackErrorController;

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
    return view('welcome');
});

//Datatable route
Route::get('datatable',[DatatableController::class,'index']);
Route::get('user/listing',[DatatableController::class,'getUser'])->name('user.list');

//export pdf and excel route
Route::get('/export',function(){
    return view('exportpdfexcel');
});
Route::get('/export/view',[StudentController::class,'viewStudentData']);
Route::get('/export/pdf',[StudentController::class,'exportStudentPdf']);
Route::get('/export/csv',[StudentController::class,'exportStudentCsv']);

//usercontroller route
Route::get('/user',[UserController::class,'sendEmailUser']);

//SlackErrorController
Route::get('/error',[SlackErrorController::class,'codeErrorSlack']);