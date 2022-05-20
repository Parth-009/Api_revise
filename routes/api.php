<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DetailController;
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

//CRUD operations 
Route::get('get',[StudentController::class,'apiGetData']);
Route::post('create',[StudentController::class,'apiPostData']);
Route::delete('delete/{id}',[StudentController::class,'apiDeleteData']);

//Register api
Route::post('user/register',[RegisterController::class,'userRegister']);
Route::post('user/login',[LoginController::class,'userLogin']);
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details',[DetailController::class,'userDetails']);
});
