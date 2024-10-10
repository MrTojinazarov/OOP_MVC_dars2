<?php


use App\Routes\Route;
use App\Controllers\CategoryController;

Route::get("/" , [CategoryController::class, 'index']);
Route::get('/contact' , [CategoryController::class, 'contact']);
Route::get('/about' , [CategoryController::class, 'about']);
Route::get('/index' , [CategoryController::class, 'index']);