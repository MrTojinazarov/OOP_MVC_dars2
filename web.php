<?php

use App\Routes\Route;
use App\Controllers\CategoryController;

Route::get("/" , [CategoryController::class, 'index']);
Route::get('/update' , [CategoryController::class, 'update']);
Route::get('/about' , [CategoryController::class, 'about']);
Route::get('/index' , [CategoryController::class, 'index']);
Route::get('/add_model' , [CategoryController::class, 'productAddView']);
Route::post('/updateProduct' , [CategoryController::class, 'updateProduct']);
Route::post('/saveUpdateProduct' , [CategoryController::class, 'saveUpdateProduct']);

Route::post('/productCreate' , [CategoryController::class, 'create']);
Route::post('/deleteProduct' , [CategoryController::class, 'delete']);