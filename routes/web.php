<?php

use App\http\controllers\SiteController;
use Illuminate\Support\Facades\Route;



Route::get('/',[SiteController::class, 'index'] );
Route::get('/sair', [SiteController::class, 'exit']);
Route::get('/usuarios/{qnt}', [SiteController::class, 'users' ]);



