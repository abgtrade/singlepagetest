<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;


Route::get("/", [CompanyController::class, "index"])->name("home");
Route::get("/edit", [CompanyController::class, "edit"])->name("edit");
Route::post("/update", [CompanyController::class, "update"])->name("update");
