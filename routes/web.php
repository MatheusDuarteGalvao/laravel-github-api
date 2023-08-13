<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GithubUserController;

/**
 * Rota principal da aplicação
 */
Route::get('/', [GithubUserController::class, 'index']);

/**
 * Rota para busca de usuário do GitHub
 */
Route::get('/search/{usuario}', [GithubUserController::class, 'search']);