<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ProductController::class,"index"])->name("product.index");

Route::get("/create", [ProductController::class,"create"])->name("product.create");

Route::post("/store", [ProductController::class,"store"])->name("product.store");

Route::get("/{id}/show", [ProductController::class,"show"])->name("product.show");

Route::get("/{id}/edit", [ProductController::class,"edit"])->name("product.edit");

Route::put("/product/{id}", [ProductController::class, "update"])->name("product.update");

Route::delete("/product/{id}", [ProductController::class, "destroy"])->name("product.destroy");
