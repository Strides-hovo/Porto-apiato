<?php

use App\Containers\Todo\Todo\UI\WEB\Controllers\CreateTodoController;
use Illuminate\Support\Facades\Route;

Route::post('todos/store', [CreateTodoController::class, 'store']);

