<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

Route::get("/", [HomeController::class, "home"])->name("home.home");
Route::get("/login", [HomeController::class, "login"])->name("home.login");
Route::get("/sobre", [HomeController::class, "about"])->name("home.about");
Route::get("/contato", [HomeController::class, "contact"])->name("home.contact");

Route::get("/clientes", [CustomerController::class, "index"])->name("customers.index");
Route::get("/clientes/cadastrar", [CustomerController::class, "register"])->name("customers.register");
Route::post("/clientes/cadastrar", [CustomerController::class, "store"])->name("customers.store");

Route::get("/ordens", [OrderController::class, "index"])->name("orders.index");
Route::get("/ordens/nova", [OrderController::class, "create"])->name("orders.create");
Route::post("/ordens/nova", [OrderController::class, "store"])->name("orders.store");