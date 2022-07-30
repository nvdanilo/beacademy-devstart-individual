<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AddressController;

Route::get("/", [HomeController::class, "home"])->name("home.home");
Route::get("/login", [HomeController::class, "login"])->name("home.login");
Route::get("/sobre", [HomeController::class, "about"])->name("home.about");
Route::get("/contato", [HomeController::class, "contact"])->name("home.contact");

Route::put("/clientes/{id}", [CustomerController::class, "update"])->name("customers.update");
Route::get("/clientes/{id}/editar", [CustomerController::class, "edit"])->name("customers.edit");
Route::delete("/clientes/{id}", [CustomerController::class, "destroy"])->name("customers.destroy");
Route::get("/clientes", [CustomerController::class, "index"])->name("customers.index");
Route::get("/clientes/cadastrar", [CustomerController::class, "create"])->name("customers.create");
Route::post("/clientes/cadastrar", [CustomerController::class, "store"])->name("customers.store");
Route::get("/clientes/{id}", [CustomerController::class, "show"])->name("customers.show");

Route::get("/enderecos", [AddressController::class, "index"])->name("addresses.index");
Route::get("/endereco");
Route::get("");

Route::get("/ordens", [OrderController::class, "index"])->name("orders.index");
Route::get("/ordens/nova", [OrderController::class, "create"])->name("orders.create");
Route::post("/ordens/nova", [OrderController::class, "store"])->name("orders.store");
