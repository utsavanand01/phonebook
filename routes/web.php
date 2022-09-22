<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get("/",[ContactController::class,"index"])->name("homepage");
Route::post("/",[ContactController::class,"store"])->name("store");
Route::get("/{cont_id}/delete/",[ContactController::class,"destroy"])->name("remove");
Route::get("/{sno}/view/",[ContactController::class,"viewPhonebook"])->name("view");
