<?php

use App\Containers\Todo\Todo\UI\WEB\Controllers\DeleteTodoController;
use Illuminate\Support\Facades\Route;

Route::delete('todos/{id}', [DeleteTodoController::class, 'destroy']);

