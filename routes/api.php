<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Appointmentcontroller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryUserController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ServiceController;


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


Route::get('/appointment',[Appointmentcontroller::class,'index']);
Route::post('/appointment',[Appointmentcontroller::class,'store']);
Route::put('/appointment/{id}',[Appointmentcontroller::class,'update']);
Route::delete('/appointment/{id}',[Appointmentcontroller::class,'destroy']);

Route::get('/users',[UsersController::class,'index']);
Route::post('/users',[UsersController::class,'store']);
Route::put('/users/{id}',[UsersController::class,'update']);
Route::delete('/users/{id}',[UsersController::class,'destroy']);

Route::get('/pets',[PetsController::class,'index']);
Route::post('/pets',[PetsController::class,'store']);
Route::put('/pets/{id}',[PetsController::class,'update']);
Route::delete('/pets/{id}',[PetsController::class,'destroy']);

Route::get('/categories',[CategoriesController::class,'index']);
Route::post('/categories',[CategoriesController::class,'store']);
Route::put('/categories/{id}',[CategoriesController::class,'update']);
Route::delete('/categories/{id}',[CategoriesController::class,'destroy']);

Route::get('/category',[CategoryUserController::class,'index']);
Route::post('/category',[CategoryUserController::class,'store']);
Route::put('/category/{id}',[CategoryUserController::class,'update']);
Route::delete('/category/{id}',[CategoryUserController::class,'destroy']);

Route::get('/comments',[CommentsController::class,'index']);
Route::post('/comments',[CommentsController::class,'store']);
Route::put('/comments/{id}',[CommentsController::class,'update']);
Route::delete('/comments/{id}',[CommentsController::class,'destroy']);

Route::get('/services',[ServiceController::class,'index']);
Route::post('/services',[ServiceController::class,'store']);
Route::put('/services/{id}',[ServiceController::class,'update']);
Route::delete('/services/{id}',[ServiceController::class,'destroy']);