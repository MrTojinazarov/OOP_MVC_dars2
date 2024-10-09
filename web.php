<?php

use App\Routes\Route;
use App\Controllers\CategoryControllers;

Route::get("/resultNav", [CategoryControllers::class, "GoResultPage"]);
?>