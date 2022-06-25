<?php

use Illuminate\Support\Facades\Route;


Route::get("/", function()
{
    echo "Página Inicial";
});

Route::get("/login", function()
{
    echo "Login";
});

Route::get("/sobre", function()
{
    echo "Sobre";
});

Route::get("/contato", function()
{
    echo "Contato";
});

Route::get("/clientes", function()
{
    echo "Lista de Clientes";
});

Route::get("/novocliente", function()
{
    echo "Novo Cliente";
});

Route::get("/ordens", function()
{
    echo "Lista de Ordens de Serviço";
});

Route::get("/novaos", function()
{
    echo "Nova Ordem de Serviço";
});