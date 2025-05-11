<?php

use App\Containers\Todo\Todo\UI\WEB\Controllers\ListTodosController;
use Illuminate\Support\Facades\Route;

Route::get('todos', [ListTodosController::class, 'index']);

